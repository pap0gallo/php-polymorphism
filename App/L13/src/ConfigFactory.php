<?php

namespace App\L13\src;

require __DIR__ . '/../../../vendor/autoload.php';

// BEGIN (write your solution here)
use App\L13\src\parsers\JsonParser;
use App\L13\src\parsers\YamlParser;
class ConfigFactory
{
    private static array $mapping = [
        'yaml' => YamlParser::class,
        'yml' => YamlParser::class,
        'json' => JsonParser::class
    ];

    public static function build(string $path): Config
    {
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        $className = self::$mapping[$ext];

        $parser  = new $className();
        $data = $parser->parse(file_get_contents($path));

        return new Config($data);
    }
}
// END
