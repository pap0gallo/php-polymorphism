<?php

namespace App\L08\src;

require __DIR__ . '/../../../vendor/autoload.php';

use App\L09\src\WeatherService;
use GuzzleHttp\Client;

// BEGIN (write your solution here)
$weather = new WeatherService(new \GuzzleHttp\Client());
$data = $weather->lookup($argv[1]);
echo "Temperature in {$data['name']}: {$data['temperature']}C";
// END
