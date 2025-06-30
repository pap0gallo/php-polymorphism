<?php

namespace App\L05\src;

require __DIR__ . '/../../../vendor/autoload.php';

// BEGIN (write your solution here)
class DatabaseConfigLoader
{
    private $path = '';

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function load($env)
    {
        $filename = "{$this->path}/database.{$env}.json";
        $raw = file_get_contents($filename);
        $config = json_decode($raw, true);
        if (array_key_exists('extend', $config)) {
            $extensionConfig = $this->load($config['extend']);

            $extendableConf = $config;
            unset($extendableConf['extend']);
            return array_merge($extensionConfig, $extendableConf);
        }
        return $config;
    }
}
// END
