<?php 

/**
 * Author Shashikant Bharti
 * Date   24 March 2021
 * Time   16:40
 * DESC   Inheritance
 */

// Creating Class
class Car
{

    public $color = 'White';
    private $weight = '300kg';
    protected $speed = '5000rpm';
    protected $milage = '20mpl';

    public function getWeight() {
        return $this->weight;
    }

    public function getSpeed() {
        return $this->speed;
    }

    public function getMilage() {
        return $this->milage;
    }

    public function getMomentum() {

    }

}

class CarMercedes extends Car
{
    protected $speed = '8000rpm';

    // Method Overriding.
    public function getMilage() {
        $milage = Parent::getMilage();
        return "Milage of Mercedes is: ".$milage;
    }
}

$car = new CarMercedes();
echo $car->color;
echo '<br>';
echo $car->getWeight();
echo '<br>';
echo $car->getSpeed();
echo '<br>';
echo $car->getMilage();
echo '<br>';
echo '<pre>';
var_dump($car);

?>