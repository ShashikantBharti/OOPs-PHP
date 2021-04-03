<?php 

/**
 * Author Shashikant Bharti
 * Date   24 March 2021
 * Time   16:40
 * DESC   Traits
 */

trait class1
{
    public function fun1() {
        echo "Class1: Fun1";
    }
}

trait class2 
{
    public function fun2() {
        echo "Class2: Fun2";
    }
}

class class3
{
    use class2;
    public function fun3(){
        echo "Class3: fun3";
    }
}

class class4 extends class3
{
    use class1;
    public function fun1() {
        echo "Class4 fun1";
    }
    public function fun4(){
        echo "Class4: fun4";
    }
}

$obj = new class4();
$obj->fun1();

?>