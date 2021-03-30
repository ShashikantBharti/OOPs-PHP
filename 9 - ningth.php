<?php 

/**
 * Author Shashikant Bharti
 * Date   24 March 2021
 * Time   16:40
 * DESC   Interface
 */

// Creating Class
interface MyInterface
{
    public function method1();
    public function method2();
}

abstract class MyClass implements MyInterface
{
    public function method1() {
        
    }
}

class MyClass2 extends MyClass
{
    public function method2() {
        
    }
}


$obj = new MyClass2();




?>