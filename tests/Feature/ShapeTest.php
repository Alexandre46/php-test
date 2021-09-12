<?php

namespace Tests\Feature;

use App\Circle;
use App\Shape;
use Tests\TestCase;

class ShapeTest extends TestCase
{
    /**
     * Test shape area as square
     *
     * @return void
     */
    public function testShapeAreaAsSquare()
    {
        $square = new Shape(30, 30);
        $areaShouldBe = 4*30; //means it's a square
        $result = $square->calculateArea();
        $this->assertEquals($areaShouldBe, $result);
    }

    /**
     * Test shape area as rectangle
     *
     * @return void
     */
    public function testShapeAreaAsRectangle()
    {
        $rectangle = new Shape(60, 30);
        $areaShouldBe = 60*30; //means it's a rectangle
        $result = $rectangle->calculateArea();
        $this->assertEquals($areaShouldBe, $result);
    }

    /**
     * Test circle area
     *
     * @return void
     */
    public function testShapeAreaAsCircle()
    {
        $circle = new Circle(10, 10, 2);
        $areaShouldBe = (3.14) * (2 * 2); // Pi * radius^2
        $result = $circle->calcCircleArea();
        $this->assertEquals($areaShouldBe, $result);
    }


}
