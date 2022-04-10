<?php 
// To call the static method from child class use parent keyword . method should be public and protected.

class father {

    public static function fun1() {
        echo "static method called ...";
    }
}

class son extends father { 

    // public function myfun() {
    //       //father::fun1();
    //       // parent::fun1();
    //        static::fun1(); 
    // } 

    // public function fun1() {
    //   echo "child function called";
    // }

}

//son::fun1();

$obj = new son;

$obj->myfun(); 

?>