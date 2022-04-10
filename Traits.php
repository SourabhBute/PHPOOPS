<?php 
trait class1 {
    function fun1() {
        echo "Fun1";
    }
}

class class2 {
    use class1;
    function fun2() {
        echo "Fun2";
    }
}

class class3 extends class2 {
    function fun3() {
        echo "Fun3";
    }
}

class class4 extends class3 {
    function fun4() {
        echo "Fun4";
    }
}
$obj = new class2();
$obj -> fun1();


?>