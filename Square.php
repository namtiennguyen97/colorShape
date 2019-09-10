<?php
include_once 'Colorable.php';

class Square implements Colorable
{
public $width;
public function __construct($width)
{
    $this->width = $width;
}
    public function getWidth()
    {
        return $this->width;
    }
    public function setWidth($width)
    {
        $this->width = $width;
    }
    public function getArea(){
    return $this->width *4;
    }
public function howToColor()
{
    return "Color all four side";
}

}