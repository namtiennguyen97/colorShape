<?php
include_once 'Square.php';
include_once 'Circle.php';
$shape[0]= new Circle(4);
$shape[1]= new Square(5);
foreach ($shape as $value){
    if ($value instanceof Square){
        echo "Dien tich hinh vuong la: ".$value->getArea()."<br>";
        echo "Color Square: ".$value->howToColor()."<br>";
    }
}
foreach ($shape as $circle){
    if ($circle instanceof Circle){
        echo "Dien tich hinh tron la: ".$circle->getArea();
    }
}
