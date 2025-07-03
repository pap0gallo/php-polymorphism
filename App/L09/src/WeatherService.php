<?php

namespace App\L09\src;

require __DIR__ . '/../../../vendor/autoload.php';

// BEGIN (write your solution here)
class WeatherService
{
    private $clientService;

    public function __construct($client)
    {
        $this->clientService = $client;
    }

    public function lookup($cityName)
    {
        $response = $this->clientService->request('GET', "http://localhost:8080/api/v2/cities/{$cityName}");
        return json_decode($response->getBody(), true);
    }
}
// END
