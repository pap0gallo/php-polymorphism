<?php

namespace App\L02\src\reverse;

require __DIR__ . '/../../../vendor/autoload.php';

use App\L02\src\Node;

function collect(Node $obj, array $acc = []): array
{
    $value = $obj->getValue();
    $next = $obj->getNext();
    $acc[] = $value;

    if (is_null($next)) {
        return $acc;
    }
    return collect($next, $acc);
}

function reverse(Node $obj): Node
{
       $values = collect($obj);
       $reversedNumbers = null;

       foreach ($values as $value) {
           $reversedNumbers = new Node($value, $reversedNumbers);
       }
       return $reversedNumbers;
}

$numbers = new Node(1, new Node(2, new Node(3)));

$values = collect($numbers);

var_dump($numbers);

print_r("\n");

var_dump($values);

var_dump(reverse($numbers));


//var_dump(class_exists(\App\L02\src\Node::class)); // true
