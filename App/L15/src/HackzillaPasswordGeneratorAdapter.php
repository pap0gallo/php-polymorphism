<?php

namespace App\L15\src;

require __DIR__ . '/../../../vendor/autoload.php';

use Hackzilla\PasswordGenerator\Generator\ComputerPasswordGenerator;

class HackzillaPasswordGeneratorAdapter implements PasswordGeneratorInterface
{
    // BEGIN (write your solution here)
    private $generator;

    public function __construct()
    {
        $this->generator = new ComputerPasswordGenerator();
    }

    public function generatePassword($length, $options)
    {
        $this->generator->setLength($length);

        $methodMap = [
            'upperCase' => 'setOptionPasswordUppercase',
            'lowerCase' => 'setOptionPasswordLowercase',
            'numbers' => 'setOptionPasswordNumbers',
            'symbols' => 'setOptionPasswordSymbols',
        ];

        foreach ($methodMap as $option => $method) {
            $this->generator->$method(false);
        }

        foreach ($options as $option) {
            if (isset($methodMap[$option])) {
                $method = $methodMap[$option];
                $this->generator->$method(true);
            }
        }

        return $this->generator->generatePassword();
    }

    // END
}
