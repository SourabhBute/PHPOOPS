<?php 
//Abstract class contain atleast 1 abstract function.
//abstract function : must declare but not implements.
//abstract class could not create object.
//abstract class , child class must contain abstract method .

abstract class class1 {
    abstract function test();
    function display() {
        echo "Display";
    }
}
class class2 extends class1 {
    function test() {
        echo "hello";
    }
}
$obj = new class2();
$obj->test();
$obj->display();

?>