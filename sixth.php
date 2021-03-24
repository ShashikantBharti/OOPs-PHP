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

        // throw new Exception(ucfirst($property) ." doesn't exists!");

        if($property === 'password') {
            return $this->name." ";
        }
        return ucfirst($property) ." doesn't exists!";
    }

    // __call() magic method.
    public function __call() {
        
    }

}

$me = new Person();
echo $me;
echo '<br>';

echo $me->username;
echo '<br>';
echo $me->password = 'Surya';

// try{
//     echo $me->password = 'Surya';
// } catch(Exception $e) {
//     echo $e->getMessage();
// }



?>