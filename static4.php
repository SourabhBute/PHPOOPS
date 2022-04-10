<?php 
class Abc {

    public static function fun1() {
        echo "Hello .. Static function called";
    }

}

class test {
    public function test() {
        abc::fun1();
    }      

}

new test();

?>