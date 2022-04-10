<?php 
abstract class A {
    public function test() {
       echo  "test method";
    }
    abstract function show();
}

class B extends A {
    function show() {
        echo "Show method called";
        A::test();
    }
}

$obj =  new B();
$obj->show();
?>