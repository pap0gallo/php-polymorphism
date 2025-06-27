<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Point;

use function App\PointFunctions\getMidpoint;

class PointsTest extends TestCase
{
    public function testGetMidpoint1()
{
    $point1 = new Point();
    $point1->x = 1;
    $point1->y = 10;
    $point2 = new Point();
    $point2->x = 10;
    $point2->y = 1;

    $midpoint = getMidpoint($point1, $point2);
    $this->assertEquals(5.5, $midpoint->x);
    $this->assertEquals(5.5, $midpoint->y);
}
    public function testGetMidpoint2()
{
    $point1 = new Point();
    $point1->x = 0;
    $point1->y = 0;
    $point2 = new Point();
    $point2->x = 4;
    $point2->y = -2;

    $midpoint = getMidpoint($point1, $point2);
    $this->assertEquals(2, $midpoint->x);
    $this->assertEquals(-1, $midpoint->y);
}
}
