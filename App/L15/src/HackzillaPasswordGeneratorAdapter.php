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

        $optionMap = [
            'upperCase' => ComputerPasswordGenerator::OPTION_UPPER_CASE,
            'lowerCase' => ComputerPasswordGenerator::OPTION_LOWER_CASE,
            'numbers' => ComputerPasswordGenerator::OPTION_NUMBERS,
            'symbols' => ComputerPasswordGenerator::OPTION_SYMBOLS,
        ];

        if (empty($options)) {
            $options = ['lowerCase'];
        }

        foreach ($optionMap as $optionConst) {
            $this->generator->setOptionValue($optionConst, false);
        }

        foreach ($options as $option) {
            if (isset($optionMap[$option])) {
                $this->generator->setOptionValue($optionMap[$option], true);
            }
        }

        return $this->generator->generatePassword();
    }
    // END
}
