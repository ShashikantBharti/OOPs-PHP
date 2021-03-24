<?php

/**
 * Author Shashikant Bharti
 * Date   24 March 2021
 * Time   19:04
 */

// Creating Class.

class Person
{
    public $name = 'Shashikant Bharti';
    public $mobile = '7080281021';

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
        }
        return " Method " . ucfirst($name) ." doesn't exists!";  

    }

    public function getPhone() {
        return $this->mobile;
    }
}

$me = new Person();
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

?>