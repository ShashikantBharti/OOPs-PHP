<?php

/**
 * Author Shashikant Bharti
 * Date   24 March 2021
 * Time   17:05
 */

// Creating Class

class Car
{

    public $color = 'Red';
    public $speed = '5000rpm';

    const FIRST_NAME = 'Shashikant';
    const LAST_NAME = 'Bharti';
    const DETAILS = [
        'age' => 24,
        'address' => 'Lucknow'
    ];

    public function getDetails() {
        var_dump(self::DETAILS);
    }

}


echo Car::FIRST_NAME;
echo ' ';
echo Car::LAST_NAME;
echo '<pre>';
var_dump(Car::DETAILS);

$car = new Car();
$car->getDetails();

?>