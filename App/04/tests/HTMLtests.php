<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

use function App\HTML\stringify;

class HTMLTest extends TestCase
{
    public function testStringify1()
    {
        $tag = ['name' => 'hr', 'class' => 'px-3', 'id' => 'myid', 'tagType' => 'single'];
        $html = stringify($tag);

        $expected = '<hr class="px-3" id="myid">';
        $this->assertEquals($expected, $html);
    }

    public function testStringify2()
    {
        $tag = ['name' => 'p', 'tagType' => 'pair', 'body' => 'text'];
        $html = stringify($tag);

        $expected = '<p>text</p>';
        $this->assertEquals($expected, $html);
    }

    public function testStringify3()
    {
        $tag = ['name' => 'div', 'tagType' => 'pair', 'body' => 'text2', 'id' => 'wow'];
        $html = stringify($tag);

        $expected = '<div id="wow">text2</div>';
        $this->assertEquals($expected, $html);
    }

    public function testStringify4()
    {
        $randomAttr = 'attr_' . rand();
        $tag = ['name' => 'div', 'tagType' => 'pair', 'body' => 'text2', 'id' => 'wow', $randomAttr => 'value'];
        $html = stringify($tag);

        $expected = '<div id="wow" ' . $randomAttr . '="value">text2</div>';
        $this->assertEquals($expected, $html);
    }
}
