<?php

namespace App\L15\src;

require __DIR__ . '/../../../vendor/autoload.php';

class PasswordBuilder
{
    private $passwordGenerator;

    public function __construct(PasswordGeneratorInterface $passwordGenerator)
    {
        $this->passwordGenerator = $passwordGenerator;
    }

    public function buildPassword($length = 8, $options = ['numbers', 'symbols'])
    {
        $password = $this->passwordGenerator->generatePassword($length, $options);
        $passwordDigest = sha1($password);
        return ['password' => $password, 'digest' => $passwordDigest];
    }
}
