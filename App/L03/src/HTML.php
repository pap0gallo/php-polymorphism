<?php

namespace App\L03\src\getLinks;

require __DIR__ . '/../../../vendor/autoload.php';


$tags = [
    ['name' => 'img', 'src' => 'hexlet.io/assets/logo.png'],
    ['name' => 'div'],
    ['name' => 'link', 'href' => 'hexlet.io/assets/style.css'],
    ['name' => 'h1']
];
// BEGIN (write your solution here)
function getLinks($tags)
{
    return array_values(array_filter(array_map(function($tag) {

        return match ($tag['name']) {
            'img' => $tag['src'] ?? null,
            'link', 'a' => $tag['href'] ?? null,
            default => null,
        };
    }, $tags)));
}
// END

print_r(getLinks($tags));