<?php

namespace App\LinkedList;

use App\Node;

// BEGIN (write your solution here)
function reverse(\App\Node $list): Node
{
    $reversedList = null;
    $current = $list;
    while ($current) {
        $reversedList = new Node($current->getValue(), $reversedList);
        $current = $current->getNext();
    }

    return $reversedList;
}
// END
