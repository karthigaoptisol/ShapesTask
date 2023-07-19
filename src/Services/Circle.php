<?php

namespace App\Services;

class Circle  extends ShapeService 
{

    public function __construct()
    {
    }

     /**
      *setAttributes for the given shape
      */
    public function setAttributes($a_or_radius, $b, $c){
        $this->a_or_radius = $a_or_radius;
        $this->b = $b;
        $this->c = $c;
    }

    /**
      *To get the type of the given shape
      */
    public function getType(): string
    {
        return "circle";
    }

    /**
      *To get the radius of the given shape
      */
    public function getAttributes(): array
    {
        return [
            "radius" => $this->a_or_radius,
        ];
    }

    /**
      *To calculate area of the given shape
      */
    public function computeArea(): float|int
    {
        return pi() * ($this->a_or_radius * $this->a_or_radius);
    }

    /**
      *To get the circumference of the given shape
      */
    public function computeCircumference(): float|int
    {
        return 2 * pi() * $this->a_or_radius;
    }
}