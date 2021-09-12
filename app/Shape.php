<?php

namespace App;

use Illuminate\Support\Str;

class Shape
{
    public $name;
    protected $width;
    protected $height;
    private $id;

    const type = '1';

    /**
     * @param string|null $width
     * @param string|null $height
     */
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
        $this->id = Str::uuid()->toString(); //unique id
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id = null)
    {
        $this->id = $id;
        return $this->id;
    }

    public function calculateArea()
    {
        $result = 0;
        if ($this->width === $this->height) {
            //means it's a square
            //Area = 4*l
            $result = 4 * ($this->width);
        } else {
            //means it's a rectangle
            //Area = width * height
            $result = ($this->width) * ($this->height);
        }
        return $result;
    }

    public function generateNewObject()
    {
        $width = $this->width;
        $height = $this->height;

        $object = new Shape($width, $height);
        $values = [
            'id' => $object->getId(),
            'width' => $width,
            'height' => $height
        ];
        return $values;
    }
}
