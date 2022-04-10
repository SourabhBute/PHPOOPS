<?php 
trait t1 {
    function fun1() {
        echo "t1:Fun1";
    }
}
trait t2 {
    function fun2() {
        echo "t2:fun2";
    }
}

class Class1 {
    use t1,t2;
}

$obj = new Class1();
$obj -> fun1();
$obj -> fun2();
?>