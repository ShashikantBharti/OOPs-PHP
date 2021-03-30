<?php 

/**
 * Author Shashikant Bharti
 * Date   24 March 2021
 * Time   16:40
 * DESC   Abstraction
 */

// Creating Class

abstract class Shape
{
    public $color;

    public function __construct($color) {
        $this->color = $color;
    }

    abstract public function getArea(): float;

    public function getColor() {
        return $this->color;
    }

}

class Triangle extends Shape
{

    public $base;
    public $height;

    public function __construct($color, $base, $height){
        Parent::__construct($color);
        $this->base = (float)$base;
        $this->height = (float)$height;
    }

    public function getArea(): float
    {
        return ($this->base*$this->height)/2;
    }
}

class Circle extends Shape
{
    public $radius;
    const PI = 3.14;

    public function __construct($color, $radius){
        Parent::__construct($color);
        $this->radius = (float)$radius;
    }

    public function getArea(): float
    {
        return self::PI*$this->radius*$this->radius;
    }
}


class Rectangle extends Shape
{

    public $height;
    public $width;

    public function __construct($color, $height, $width) {
        Parent::__construct($color);
        $this->height = (float)$height;
        $this->width = (float)$width;
    }

    public function getArea(): float
    {
        return $this->height*$this->width;
    }
}


$c = new Circle('red', 15);
echo $c->getArea().PHP_EOL;
$t = new Triangle('red', 10,  30);
echo $t->getArea().PHP_EOL;
$r = new Rectangle('blue', '10.4', '20');
echo $r->getArea();


?>