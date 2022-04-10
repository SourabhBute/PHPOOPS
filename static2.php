<?php 
class greetings {
    // static variable 
    public static $var = 20;

    // Non static variable 
    public $var1 = 10;

    public function __construct() {
        echo "it is not called if not create object";
    }

    public function fun1() {
        echo "Fun1 called";
        echo "<br>";
        echo  "value of static variable = ".self::$var ;
    }

    public static function fun2() {
        // to access non static variable                  
        echo "value of non static variable = ".$var1;
              
    }
}

//$obj = new greetings();

greetings::fun1();

greetings::fun2();

/*
Q) Why we use static method?.
==> if we don't want to call constructor.that's why we call the method by classname.

==> Under static function you can not able to access non static variable.

*/

?>