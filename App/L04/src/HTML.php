<?php

namespace App\L03\src\getLinks;

require __DIR__ . '/../../../vendor/autoload.php';

$tag = ['name' => 'hr', 'class' => 'px-3', 'id' => 'myid', 'tagType' => 'single'];

// BEGIN (write your solution here)
function stringify(array $tag): ?string
{
    $name = $tag['name'];
    $tagType = $tag['tagType'];
    $body = $tag['body'] ?? '';

    $attributes = $tag;
    unset($attributes['name'], $attributes['tagType'], $attributes['body']);

    $attributesStrings = [];
    foreach ($attributes as $key => $value) {
        $attributesStrings [] = $key . '="' . $value . '"';
    }
    $attrStr = trim(implode(' ', $attributesStrings));
    if (!empty($attrStr)) {
        return $tagType === 'single'
            ? "<$name $attrStr>"
            : "<$name $attrStr>$body</$name>";
    } else {
        return $tagType === 'single'
            ? "<$name>"
            : "<$name>$body</$name>";
    }
}

print_r(stringify($tag));
// END
