<?php 
/**
 * Author Shashikant Bharti
 * Date   24 March 2021
 * Time   17:05
 * Desc   Contructor and Destructor
 */


// Creating Class
class Car
{

    private $color = 'Red';
    private $speed = '5000rpm';

    public function __construct($color = null, $speed = null) {
        if($color !== null and $speed !== null) {
            $this->color = $color;
            $this->speed = $speed;
        } else {
            echo '<p style="color:red" >Error: Exactly Two Parameters Required in constructor. </p>';
        }
    }

    public function getColor() {
        echo $this->color.PHP_EOL;
    }

    public function __destruct() {
        echo 'Destructor is Called!'.PHP_EOL;
    }

}

// Creating Instance of Class
$myCar = new Car();
$myCar2 = new Car('White', '8000rpm');
// Initializing Values;

// Display
echo '<pre>';
var_dump($myCar);
$myCar->getColor();
$myCar2->getColor();

unset($myCar);
sleep(2);

?>