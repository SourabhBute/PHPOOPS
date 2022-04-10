<?php 
interface class1 {
    public function test();
}
class class2 implements class1 {
    public function test() {
        echo "Hello World";
    }
}
$obj = new class2();
$obj -> test();
?>