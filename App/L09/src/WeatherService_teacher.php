<?php

namespace App\L09\src;

require __DIR__ . '/../../../vendor/autoload.php';

// BEGIN (write your solution here)
class WeatherService
{
    private const API_URL = 'http://localhost:8080/api/v2';

    private $httpClient;

    public function __construct($httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function lookup($cityName)
    {
        $url = implode('/', [self::API_URL, "cities/{$cityName}"]);
        $response = $this->httpClient->get($url);
        return json_decode($response->getBody(), true);
    }
}
// END
