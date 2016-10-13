zyberspace/steam-web-api-client
===============================
Automatically generated api client for the [Steam Web API](https://developer.valvesoftware.com/wiki/Steam_Web_API) in style of the [google-api-php-client](https://github.com/google/google-api-php-client/).

[![Packagist](https://img.shields.io/packagist/v/zyberspace/steam-web-api-client.svg)](https://packagist.org/packages/zyberspace/steam-web-api-client)
[![License](https://img.shields.io/packagist/l/zyberspace/steam-web-api-client.svg)](https://www.mozilla.org/MPL/2.0/)

Automatically generated?
------------------------
Yeah, every API interface (those are not php interfaces) got generated automatically from the [`/ISteamWebAPIUtil/GetSupportedAPIList/v1/`](https://github.com/zyberspace/php-steam-web-api-client/blob/master/lib/Zyberspace/SteamWebApi/Interfaces/ISteamWebAPIUtil.php#L16-L23) method. Only the classes outside of the `Interfaces` directory are written from hand.

This way it is easy for me to keep the api updated because i just need to run the generation command every time valve changes something.

Installation
------------

In your project-root:

```shell
composer require --update-no-dev zyberspace/steam-web-api-client
```
Composer will then automatically add the package to your project requirements and install it (also creates the `composer.json` if you don't have one already).

Client structure
----------------
The client is structured in 3 peaces:

  - The `Client` class which saves your api key and takes care of the actual api calls.
  - The api interfaces which are automatically generated and provide the api methods to call.
  - The `InterfaceGenerator` which generated the interfaces. **You don't need this one except you want to update the saved interface classes.**  
  (Use it by installing the dev dependencies and the execute `composer generate-interfaces [your api key]`.)

Quickstart
----------
If you installed the client with composer like above and already [obtained](http://steamcommunity.com/dev/apikey) your api key from valve these are the 4 steps to use the api:

  1. Require the composer autoloader

     ```php
     require('vendor/autoload.php');
     ```

  2. Create the Steam Web API Client

     ```php
     $client = new \Zyberspace\SteamWebApi\Client('[your api key goes here]');
     ```

  3. Create an instance of the api interface you want to use

     ```php
     $steamUser = new \Zyberspace\SteamWebApi\Interfaces\ISteamUser($client);
     ```

  4. Make your call to the method you want to use

     ```php
     $response = $steamUser->GetPlayerSummariesV2('76561198059720690');
     ```

Every method returns an object build from the json response. If you want to know more about the response format of every specific method, check the [Steam Web API documentation](https://developer.valvesoftware.com/wiki/Steam_Web_API).

```php
require('vendor/autoload.php');

$client = new \Zyberspace\SteamWebApi\Client($_ENV['STEAM_WEB_API_KEY']);
$steamUser = new \Zyberspace\SteamWebApi\Interfaces\ISteamUser($client);
$response = $steamUser->GetPlayerSummariesV2(implode(',', $steamIds));

var_dump($response);
```

Working with multiple optional arguments
----------------------------------------

If the method you need has multiple optional arguments but you don't want to use all of them, set the non-needed arguments to `null`. This is also the default value for them and will therefore be ignored by the client.

Documentation
-------------
To create the docs, just run `phpdoc` in the the project-root.  
An online-version is available at [phpdoc.zyberware.org/zyberspace/steam-web-api-client](http://phpdoc.zyberware.org/zyberspace/steam-web-api-client/).

For more information about the api interfaces and the methods please refer to the [Steam Web API documentation](https://developer.valvesoftware.com/wiki/Steam_Web_API).

License
-------
This software is licensed under the [Mozilla Public License v. 2.0](http://mozilla.org/MPL/2.0/). For more information, read the file `LICENSE`.
