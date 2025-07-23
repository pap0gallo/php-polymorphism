<?php

namespace App\L03\src\getLinks;

require __DIR__ . '/../../../vendor/autoload.php';

$tag = ['name' => 'hr', 'class' => 'px-3', 'id' => 'myid', 'tagType' => 'single'];

// BEGIN (write your solution here)
function buildAttrs(array $tag)
{
    return collect($tag)
        ->except(['name', 'tagType', 'body'])
        ->map(fn($value, $key) => " {$key}=\"{$value}\"")
        ->join('');
}

function stringify($tag)
{
    $attrs = buildAttrs($tag);

    $mapping = [
        'single' =>
            fn($tag) => "<{$tag['name']}{$attrs}>",
        'pair' =>
            fn($tag) => "<{$tag['name']}{$attrs}>{$tag['body']}</{$tag['name']}>"
    ];

    $build = $mapping[$tag['tagType']];
    return $build($tag);
}

print_r(stringify($tag));
// END
