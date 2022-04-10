<?php 
interface Test {
    function  test();
}

class class1 implements Test {
    function test() {
        echo "Hi";
    }
}

class class2 implements Test {
    function test() {
        echo "Hello";
    }
}

$obj = new class2();
$obj -> test();
?>