<?php 
interface class1 {
    public function test(); // same method 
}

interface class2 {
    public function test(); // same method
}

class class3 implements class1, class2 {
    public function test() { // which method is implement?.
        echo "Hello";
    }    
}
$obj = new class3();
$obj -> test();
var_dump($obj);

?>