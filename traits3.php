<?php 
trait t1 {
    function fun1() {
        echo "t1: fun1";
    }
}

trait t2 {
    function fun2() {         //same method 
        echo  "t2: fun2";
    }

}

class class1 {
    use t1,t2 ;
    function fun2() {       //same method but priority given to class method.
        echo " class1 : fun2";
    }
}
$obj =  new class1();
$obj -> fun2();
?>