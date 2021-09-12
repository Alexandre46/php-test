<?php

namespace App\Http\Controllers;

use App\Circle;
use App\Rectangle;
use App\Shape;
use Illuminate\Http\Request;

class ShapeController extends Controller
{
    public function index()
    {
        $shape = new Shape(20, 20);
        $rectangle = new Rectangle(60, 30);
        $circle = new Circle(20, 20, 2);

        return view('shape', [
            'shape' => $shape,
            'rectangle' => $rectangle,
            'circle' => $circle
        ]);
    }
}
