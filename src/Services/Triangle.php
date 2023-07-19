<?php

namespace App\Services;

class Triangle extends ShapeService
{
    public $a_or_radius;
    public $b;
    public $c;

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
        return "triangle";
    }

    /**
      *To get the radius of the given shape
      */
    public function getAttributes(): array
    {
        return [
            "a" => $this->a_or_radius,
            "b" => $this->b,
            "c" => $this->c,
        ];
    }

    /**
      *To calculate area of the given shape
      */
    public function computeArea(): float|int
    {
        return ($this->b * $this->a_or_radius)/2;
    }

    /**
      *To get the circumference of the given shape
      */
    public function computeCircumference(): float|int
    {
        return $this->a_or_radius + $this->b + $this->c;
    }
}