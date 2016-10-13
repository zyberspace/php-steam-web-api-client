<?php
/**
 * Copyright 2016 Eric Enold <zyberspace@zyberware.org>
 *
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at http://mozilla.org/MPL/2.0/.
 */
namespace Zyberspace\SteamWebApi;

require_once('vendor/autoload.php');

use Composer\Script\Event;
use PhpParser\BuilderFactory;
use PhpParser\PrettyPrinter;
use PhpParser\Node;

class InterfaceGenerator
{
    static protected function _getApiKey(Event $event) {
        //Check if api key got passed as argument
        $arguments = $event->getArguments();
        if (isset($arguments[0])) {
            return $arguments[0];
        }

        //Check for `.apikey` file in the working directory
        $composer = $event->getComposer();
        $apiKeyFile = realpath(implode(DIRECTORY_SEPARATOR, [__DIR__, '..', '..', '..', '.apikey']));
        if (is_readable($apiKeyFile)) {
            return trim(file_get_contents($apiKeyFile));
        }

        //No api key found, throw Exception
        throw new \Exception('Please provide a valid api key. Pass it as argument or put it in the `.apikey` file.');
    }
    static public function generateAll(Event $event)
    {
        $client = new Client(static::_getApiKey($event));
        $steamWebAPIUtil = new Interfaces\ISteamWebAPIUtil($client);

        $interfaces = $steamWebAPIUtil->GetSupportedAPIListV1()->apilist->interfaces;
        foreach ($interfaces as $interface) {
            $interaceGenerator = new self($interface);
            $interaceGenerator->saveToFile();
        }
    }

    const INTERFACE_NAMESPACE = 'Zyberspace\\SteamWebApi\\Interfaces';

    protected $_interfaceApiDefinition;

    public function __construct($interfaceApiDefintion)
    {
        $this->_interfaceApiDefinition = $interfaceApiDefintion;
    }

    protected function _escapeVariableName($variableName)
    {
        preg_match('%[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*%', $variableName, $matches);
        return $matches[0];
    }

    public function generateNode()
    {
        $factory = new BuilderFactory();

        $class = $factory->class($this->_interfaceApiDefinition->name)
            ->extend('AbstractInterface');
        foreach($this->_interfaceApiDefinition->methods as $methodApiDefinition) {
            $docComment = '/**' . "\n" . ' * ' . implode('/', array(
                    '',
                    $this->_interfaceApiDefinition->name,
                    $methodApiDefinition->name,
                    'v' . $methodApiDefinition->version,
                    ''
                )) . "\n" . ' *' . "\n";

            $methodParams = array();
            $arrayItems = array();
            foreach ($methodApiDefinition->parameters as $parameterApiDefinition) {
                $parameterName = $this->_escapeVariableName($parameterApiDefinition->name);
                if ($parameterApiDefinition->name !== 'key') {
                    $methodParam =  $factory->param($parameterName);
                    if ($parameterApiDefinition->optional !== false) {
                        $methodParam->setDefault(null);
                    }
                    $methodParams[] = $methodParam;

                    $arrayItems[] = new Node\Expr\ArrayItem(
                        new Node\Expr\Variable($parameterName),
                        new Node\Scalar\String_($parameterApiDefinition->name)
                    );

                    $docComment .= ' * @param ' . $parameterApiDefinition->type . ' $' . $parameterName;
                    if (isset($parameterApiDefinition->description) && $parameterApiDefinition->description !== '') {
                        $docComment .= ' ' . $parameterApiDefinition->description;
                    }
                    $docComment .= "\n";
                }
            }
            $docComment .= ' */';

            $method = $factory->method($methodApiDefinition->name . 'V' . $methodApiDefinition->version)
                ->makePublic()
                ->addStmt(new Node\Stmt\Return_(new Node\Expr\MethodCall(
                    new Node\Expr\Variable('this'),
                    '_call',
                    array(
                        new Node\Scalar\MagicConst\Method(),
                        new Node\Scalar\String_($methodApiDefinition->httpmethod),
                        new Node\Expr\Array_($arrayItems)
                    )
                )));
            foreach ($methodParams as $methodParam) {
                $method->addParam($methodParam);
            }
            $method->setDocComment($docComment);

            $class->addStmt($method);
        }

        $node = $factory->namespace(self::INTERFACE_NAMESPACE)
            ->addStmt($factory->use('Zyberspace\SteamWebApi\AbstractInterface'))
            ->addStmt($class)
            ->getNode();

        return $node;
    }

    public function saveToFile()
    {
        $node = $this->generateNode();

        $prettyPrinter = new PrettyPrinter\Standard();
        file_put_contents(__DIR__ . '/Interfaces/' . $this->_interfaceApiDefinition->name . '.php',
            $prettyPrinter->prettyPrintFile(array($node)) . PHP_EOL);

        echo $this->_interfaceApiDefinition->name . PHP_EOL;
    }
}
