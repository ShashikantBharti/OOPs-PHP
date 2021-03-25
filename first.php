<?php 
/**
 * Author Shashikant Bharti
 * Date   24 March 2021
 * Time   16:23
 * Desc   Classes and Objects, properties and Methods, access modifiers
 */


// Creating Class
class Car
{

    private $color;
    private $weight;
    protected $speed;

    // For Validation
    private $availableColors = [
        'Red', 'Black', 'Green', 'Pink', 'Yellow', 'Blue', 'Purple'
    ];

    public function setColor($color = null) {
        if(in_array($color, $this->availableColors)) {
            $this->color = $color;
        } else {
            echo 'Invalid Color Name!';
        }
    }

    public function getColor() {
        echo $this->color;
    }

    public function setWeight($weight = null) {
        $this->weight = $weight;
    }

    public function getWeight() {
        echo $this->weight;
    }

}

// Creating Instance of Class
$myCar = new Car();

// Initializing Values;
// $myCar->color = 'red';
// $myCar->weight = '200kg';
// $myCar->speed = '300kmps';

$myCar->setColor('Red');
$myCar->setWeight('200kg');

// Display
echo '<pre>';
print_r($myCar);
// var_dump($myCar);

echo $myCar->getWeight();
echo '<br>';
echo $myCar->getColor();

?>