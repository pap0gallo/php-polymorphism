<?php

namespace App\L08\src;

require __DIR__ . '/../../../vendor/autoload.php';

use App\L09\src\WeatherService;
use GuzzleHttp\Client;

// BEGIN (write your solution here)
if (!$argv[1]) {
    echo "City name is required.\n";
    exit(1);
} else {
    $cityName = $argv[1];
}

$service = new WeatherService(new Client());
$responseArray = $service->lookup($cityName);

$cityName = $responseArray['name'];
$temperature = $responseArray['temperature'];

echo "Temperature in {$cityName}: {$temperature}C\n";
// END
