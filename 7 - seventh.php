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

    protected static $name = 'Basic Car';

    const MY_CONSTANT = 'Parent Class Constant!';

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
        return $this->weight*$this->speed;
    }


}

class CarMercedes extends Car
{

    protected static $name;

    const MY_CONSTANT = 'Child Class Constant!';

    // Method Overriding.
    public function getMilage() {
        $milage = Parent::getMilage();
        return "Milage of Mercedes is: ".$milage;
    }
}

class CarSuzuki extends CarMercedes
{
    protected static $name;

    public function getSpeed() {
        return $this->speed;
    }

}

$car = new CarSuzuki();
echo $car->getSpeed();
// echo $car->color;
// echo '<br>';
// echo $car->getWeight();
// echo '<br>';
// echo $car->getSpeed();
// echo '<br>';
// echo $car->getMilage();
// echo '<br>';
// echo '<pre>';
// var_dump($car);
// echo '</pre>';
// echo '<br>';
// echo Car::MY_CONSTANT;
// echo '<br>';
// echo CarMercedes::MY_CONSTANT;

// echo CarSuzuki::$name;


// ----------------------------------------------------- //

// final class cannot be extended.

class Person
{
    public $name;
    public $age;
    public $address;

    public function __construct($name, $age, $address) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }


    // final function cannot be overriden.
    public function getDetails(){
        return [
            'name'=> $this->name,
            'age' => $this->age,
            'address' => $this->address
        ];
    }

    public function hello() {
        echo "I am $this->name and I belong to $this->address. My age is $this->age";
    }
}

class Employee extends Person
{
    public $post;
    public $salary;

    public function __construct($name, $age, $address, $post, $salary){
        Parent::__construct($name, $age, $address);
        $this->post = $post;
        $this->salary = $salary;
    }

    public function getDetails() {
        return [
            'name' => $this->name,
            'age' => $this->age,
            'address' => $this->address,
            'post' => $this->post,
            '$salary' => $this->salary
        ];
    }

    public function hello() {
        echo " I am $this->name, I belong to $this->address. I am $this->age years old now. I am working as $this->post and my salary is Rs.$this->salary.";
    }
}


$p = new Person('Shashikant', 23, 'Lucknow');
echo '<br>';
$p->hello();
echo '<pre>';
var_dump($p->getDetails());
$e = new Employee('Shashikant', 23, 'Lucknow', 'Developer', 10000);
var_dump($e->getDetails());
$e->hello();

?>