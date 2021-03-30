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
        'Red',
        'Black',
        'Blue',
        'Silver',
        'Brown',
        'Gray'
    ];

    public function setColor($color = null) {
        if($color !== null) {
            if(in_array($color, $this->availableColors)) {
                $this->color = $color;
            } else {
                echo '<p style="color:red" >Error: Color is not available! </p>';
            }
        } else {
            echo '<p style="color:red" >Error: Exactly One Parameter Required in setColor(param) Function. </p>';
        }
    }

    public function getColor() {
        if($this->color !== null) {
            return $this->color;
        } else {
            echo '<p style="color:red" >Error: color is not set. </p>';
        }
    }

    public function setWeight($weight = null) {
        if($weight !== null) {
            $this->weight = $weight;
        } else {
            echo '<p style="color:red" >Error: Exactly One Parameters Required in constructor. </p>';
        }
    }

    public function getWeight() {
        if($this->weight !== null) {
            return $this->weight;
        } else {
            echo '<p style="color:red" >Error: Weight is not set!</p>';
        }
    }

}

// Creating Instance of Class
$myCar = new Car();

// Initializing Values;
// $myCar->color = 'red';
// $myCar->weight = '200kg';
// $myCar->speed = '300kmps';

$myCar->setColor();
$myCar->setWeight('200kg');

// Display
echo '<pre>';
print_r($myCar);
// var_dump($myCar);

echo $myCar->getWeight();
echo '<br>';
echo $myCar->getColor();

?>