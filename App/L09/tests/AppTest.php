<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use mikehaertl\shellcommand\Command;

class AppTest extends TestCase
{
    public function testBerlin()
    {
        $this->expectOutputRegex('/Temperature in berlin: \d+C/');

        $command = new Command('php bin/weather.php berlin');
        $command->execute();
        echo $command->getOutput();
        echo $command->getError();
    }

    public function testMonaco()
    {
        $this->expectOutputRegex('/Temperature in monaco: \d+C/');

        $command = new Command('php bin/weather.php monaco');
        $command->execute();
        echo $command->getOutput();
        echo $command->getError();
    }
}
