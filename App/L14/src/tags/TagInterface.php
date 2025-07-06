<?php

namespace App\L14\src\tags;

require __DIR__ . '/../../../../vendor/autoload.php';

interface TagInterface
{
    public function render();
    public function __toString();
}
