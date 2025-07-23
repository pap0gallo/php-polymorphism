<?php

namespace App\LinkedList;

use App\Node;

// BEGIN (write your solution here)
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
// END
