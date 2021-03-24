<?php 
/**
 * Author Shashikant Bharti
 * Date   24 March 2021
 * Time   16:40
 */


// Creating Class
class Car
{

    public $color = 'Green';
    private $weight;
    protected $speed;

}

// Creating Instance of Class
$myCar = new Car();
$myCar2 = & $myCar;
// $myCar = null;

$myCar3 = clone $myCar;

// Initializing Values;
$myCar2->color = 'Red';

// Display
echo '<pre>';
var_dump($myCar, $myCar2, $myCar3);
// var_dump($myCar);

?>