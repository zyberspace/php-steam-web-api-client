<?php
/**
 * Copyright 2016 Eric Enold <zyberspace@zyberware.org>
 *
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at http://mozilla.org/MPL/2.0/.
 */
namespace Zyberspace\SteamWebApi;

class Client
{
    const BASE_URL = 'https://api.steampowered.com/';

    protected $_apiKey;

    /**
     * @var \GuzzleHttp\Client
     */
    protected $_guzzleClient;

    public function __construct($apiKey)
    {
        $this->_apiKey = $apiKey;

        $this->_guzzleClient = new \GuzzleHttp\Client(array(
            'base_uri' => self::BASE_URL
        ));
    }

    public function call($interface, $method, $version, $httpMethod, $parameters)
    {
        $path = implode('/', array($interface, $method, 'v' . $version));

        $parameters['key'] = $this->_apiKey;
        $response = $this->_guzzleClient->request($httpMethod, $path, array(
            'query' => $parameters
        ));

        return json_decode($response->getBody()->getContents());
    }
}
