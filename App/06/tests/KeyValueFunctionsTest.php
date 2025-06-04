<?php

namespace App\Tests;

use App\FileKV;
use App\InMemoryKV;
use PHPUnit\Framework\TestCase;

use function App\KeyValueFunctions\swapKeyValue;

class KeyValueFunctionsTest extends TestCase
{
    public function testSetGet()
    {
        $map = new InMemoryKV(['key' => 10]);
        $map->set('key2', 'value2');
        swapKeyValue($map);
        $this->assertNull($map->get('key'));
        $this->assertEquals('key', $map->get(10));
        $this->assertEquals('key2', $map->get('value2'));
    }

    public function testSwapInMemoryKV()
    {
        $map = new InMemoryKV(['foo' => 'bar', 'bar' => 'zoo']);
        swapKeyValue($map);
        $this->assertEquals('foo', $map->get('bar'));
        $this->assertEquals('bar', $map->get('zoo'));
    }

    public function testSwapSwapFileKV()
    {
        $filename = tempnam('/tmp', 'testSwapSwapFileKV');

        $map = new FileKV($filename, ['foo' => 'bar', 'bar' => 'zoo']);
        swapKeyValue($map);
        $this->assertEquals('foo', $map->get('bar'));
        $this->assertEquals('bar', $map->get('zoo'));
    }
}
