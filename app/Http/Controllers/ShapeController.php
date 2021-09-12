<?php

namespace App\Http\Controllers;

use App\Circle;
use App\Rectangle;
use App\Shape;

class ShapeController extends Controller
{
    public function index()
    {
        $shape = new Shape(20, 20);
        $rectangle = new Rectangle(60, 30);
        $circle = new Circle(10, 10, 2);

        return view('shape', [
            'shape' => $shape->generateNewObject(),
            'shapeArea' => $shape->calculateArea(),
            'rectangle' => $rectangle->generateNewObject(),
            'rectangleArea' => $rectangle->calculateArea(),
            'circle' => $circle->generateCircleObject(),
            'circleArea' => $circle->calcCircleArea()
        ]);
    }
}
