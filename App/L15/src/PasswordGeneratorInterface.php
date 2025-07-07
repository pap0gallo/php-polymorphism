<?php

namespace App\L15\src;

require __DIR__ . '/../../../vendor/autoload.php';

interface PasswordGeneratorInterface
{
    public function generatePassword($length, $options);
}
