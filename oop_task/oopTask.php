<?php
abstract class SHAPE
{
  abstract public function calculateArea();
  abstract public function calculatePerimeter();
}
interface drawable
{
  public function draw();
}

class circle extends Shape implements drawable
{
  public $radius;
  public function __construct($radius)
  {
    $this->radius = $radius;
  }
  public function calculateArea()
  {
    $res= pi() * $this->radius * $this->radius;
    return $res;
  }
  public function calculatePerimeter()
  {
    $res=pi() * $this->radius * 2;
    return $res; 
  }



  public function draw()
  {
    echo "circle";
    return "<div style=\"width: " . (2 * $this->radius) . "px;
     height: " . (2 * $this->radius) . "px;
      border-radius: 50%; background-color: blue;\"></div>";
  }
}

class rectangle extends SHAPE implements drawable
{
  public $width;
  public $length;
  public function __construct($length, $width)
  {
    $this->length = $length;
    $this->width = $width;
  }
  public function calculateArea()
  {
    $res=$this->length * $this->width;
    return $res;
  }
  public function calculatePerimeter()
  {
    $res=2 * ($this->length + $this->width);
    return $res;
  }



  public function draw()
  {
    echo "rectangle";
    return "<div style=\"width: " . ($this->length) . "px;
     height: " . ($this->width) . "px;
      background-color: blue;\"></div>";
  }
}




$c1 = new Circle(30);
echo "Circle Area :". $c1->calculateArea() . "<br/>";
echo "Circle Perimeter :".$c1->calculatePerimeter() . "<br/>";
echo $c1->draw() . "<br/>";

$r1 = new rectangle(75, 100);

echo "Rectangle Area :". $r1->calculateArea() . "<br/>";

echo "Rectangle Perimeter :".$r1->calculatePerimeter() . "<br/>";

echo $r1->draw() . "<br/>";
