<?php

namespace App;

use Carbon\Carbon;
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
        $this->id = Str::uuid()->toString();
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
        return ($this->width * $this->height);
    }

    public function generateNewObject()
    {
        $width = 10;
        $height = 10;

        $object = new Shape($width, $height);
        $values = [
            'objecto_id' => $object->getId(),
            'objecto_width' => $width,
            'objecto_height' => $height
        ];
        return $values;
    }
}
