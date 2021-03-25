<?php 
/**
 * Author Shashikant Bharti
 * Date   24 March 2021
 * Time   17:05
 * Desc   Static property and method
 */


// Creating Class
class Car
{

    public $color = 'Red';
    public $speed = '5000rpm';
    private static $availableColors = [
        'Red', 'Green', 'Blue', 'Black', 'Cyan', 'Magenta'
    ];
    public static $counter = 0;

    public function __construct() {
        //Car::$counter++;
        self::$counter++;
    }

    public static function getAvailableColors() {
        return self::$availableColors;
    }


}

$car = new Car();
echo Car::$counter.PHP_EOL;
$car = new Car();
echo Car::$counter.PHP_EOL;
$car = new Car();
echo Car::$counter.PHP_EOL;
$car = new Car();
echo Car::$counter.PHP_EOL;

echo '<pre>';
var_dump(Car::getAvailableColors());

?>