<?php 
class class1 {
    public static function fun1() {
        echo "Hello";
    }

    public function __destruct() {
        echo "end";

    }

}

class1::fun1();


?>