<?php

/**
 * Author Shashikant Bharti
 * Date   24 March 2021
 * Time   19:04
 * Desc   Magic Functions (__toString, __get, __set, __call, __callStatic, __invoke, __sleep and __wakeup, __clone)
 */

// Creating Class.

class Person
{
    public $name;
    public $mobile;

    // __construct() and __destruct() magic methods
    public function __construct($name, $mobile) {
        $this->name = $name;
        $this->mobile = $mobile;
    }

    public function __destruct() {
        echo "Destructor Called!";
    }

    // __toString() magic Method.
    public function __toString() {
        return "Name: $this->name. Phone: $this->mobile.";
    }

    // __get magic method.
    public function __get($property) {
        if($property === 'username') {
            return $this->name." ";
        } 
        return ucfirst($property)." doesn't exists! ";
    }

    // __set magic method.
    public function __set($property, $value) {
        // echo '<pre>';
        // var_dump($property, $value);

        // throw new Exception(ucfirst($property) ." property doesn't exists!");

        if($property === 'password') {
            return $this->name." ";
        }
        return ucfirst($property) ." doesn't exists!";
    }

    // __call() magic method.
    public function __call($name, $args) {
        
        // echo '<pre>';
        // var_dump($name, $args);

        // throw new Exception(ucfirst($name) ." method doesn't exists!");

        if($name === 'getPhoneNumber' || $name === 'getMobileNumber') {
            return $this->getPhone();
        } else if($name === 'setPhoneNumber' || $name === 'setMobileNumber') {
            // $this->setPhone($args[0]);

            call_user_func_array([$this, 'setPhone'], $args);

            return 1;
        }
        return " Method " . ucfirst($name) ." doesn't exists!";  

    }

    public function getPhone() {
        return $this->mobile;
    }

    public function setPhone($phone) {
        $this->mobile = $phone;
    }

    // __callStatic() magic method.
    public static function __callStatic($name, $args) {
        echo ucfirst($name)." Static method doesn't exists! ";
    }

    // __invoke() magic method.
    public function __invoke() {
        echo "Object invoked!";
    }

    // __sleep() and __wakeup() magic methods.
    public function __sleep() {
        unset($this->mobile);
        return ['name'];
    }

    public function __wakeup() {
        echo '<br>Wake Up Surya! Wake Up!';
    }

    // __clone() magic method.
    public function __clone() {
        
    }

}

$me = new Person('Shashikant Bharti', '7080281021');
echo $me;
echo '<br>';

echo $me->username;
echo '<br>';
// echo $me->password = 'Surya';
echo '<br>';

try{
    echo $me->password = 'Surya';
} catch(Exception $e) {
    echo $e->getMessage();
}

echo '<br>';

try{
    echo $me->getPhoneNumber();
} catch(Exception $e) {
    echo $e->getMessage();
}

echo '<br>';
echo $me->getMobileNumber();
echo '<br>';
echo $me->getMobilePhone();
echo '<br>';
$me->setMobileNumber('7521037123');
echo $me->getMobileNumber();
echo '<br>';
$me::delete();
echo '<br>';
$me();
echo '<br>';
var_dump(is_callable($me));
echo '<br>';
$me2 = serialize($me);
echo $me2;
$me3 = unserialize($me2);
echo '<br>';
echo '<pre>';
var_dump($me);
var_dump($me3);
echo '</pre>';
var_dump($me3 === $me);


?>