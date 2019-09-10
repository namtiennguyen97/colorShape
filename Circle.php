<?php


class Circle
{
public $radius;
public function __construct($radius)
{
    $this->radius = $radius;
}

    public function getRadius()
    {
        return $this->radius;
    }
    public function getArea(){
    return ($this->radius * $this->radius) * 3.14;
    }
}