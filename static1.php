<?php 
class Test {

    public function fun1() {
        echo 'fun1';
    }
    public static function fun2() {
        echo "static fun2" ;
    }
}

Test::fun1(); // why? non static method can also be by static way?.
Test::fun2(); //ok - is a static method

?>



