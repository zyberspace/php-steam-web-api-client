<?php
/**
 * Copyright 2016 Eric Enold <zyberspace@zyberware.org>
 *
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at http://mozilla.org/MPL/2.0/.
 */
namespace Zyberspace\SteamWebApi;

abstract class AbstractInterface
{
    protected $_client;

    public function __construct(Client $client)
    {
        $this->_client = $client;
    }

    protected function _call($callee, $httpMethod, $parameters)
    {
        $trimmedCallee = substr($callee, strlen(__NAMESPACE__ . '\\Interfaces\\'));
        preg_match('%^(I.+)::(.+)V(\d+)$%', $trimmedCallee, $matches);

        array_shift($matches);
        list($interface, $method, $version) = $matches;

        //Unset parameters with null values
        foreach ($parameters as $key => $parameter) {
            if ($parameter === null) {
                unset($parameters[$key]);
            }
        }

        return $this->_client->call($interface, $method, $version, $httpMethod, $parameters);
    }
}
