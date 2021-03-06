<?php

namespace App;

use Illuminate\Support\Str;

class Circle extends Shape
{
    const type = '3';

    protected $radius;

    public function __construct($width, $height, $radius)
    {
        $this->radius = $radius;
        parent::__construct($width, $height);
    }

    public function calcCircleArea()
    {
        return (3.14) * (($this->radius) * 2);
    }

    public function generateCircleObject()
    {
        $obj = new Circle(20,20,2);
        return [
            'id' => $obj->getId(),
            'name' => $obj->name,
            'radius' => $obj->radius
        ];
    }

    public function generateId($type)
    {
        switch ($type) {
            case $type == 'uuid':
                $id = Str::uuid()->toString();
                break;
            default:
                $id = time();
                break;
        }
        return $id;
    }
}
