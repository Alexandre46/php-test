<?php

namespace App;

use Illuminate\Support\Str;

class Rectangle extends Shape
{
    const type = '2';

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
