<?php 

// you can not define constructor because it's not contain body.
//and all the methods inside interface are bydefault abstract.
interface class1 {
    public function __construct(){  
        echo "Constructor";
    }   
    public function test();
}
class class2 implements class1 {
    public function test() {
        echo "Hello EveryOne";
    }   
}
$obj =  new class2();
$obj -> test();
?>