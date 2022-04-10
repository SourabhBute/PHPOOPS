<?php 

class class1 {

    public function __construct() {
        echo "Constrcut1";
    }

    public function fun1() {
        echo "Parent class";
    }

}

class class2 extends class1 {

    public  function fun1() {
        echo "child class.....";
    }
} 

$obj = new class2();

$obj->fun1();

?>