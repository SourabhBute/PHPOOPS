<?php 
//:: scope Resolution operator 

// const

//static

class Abc {

    const MAX = 100;
    public static $var =  "static";

    public $val =20;

    public function __construct() {
        echo "Constructor Called";
    }

    public function abc() {
        echo "Second Constructor called";
    }

}
// this is way to create object 
//$obj = new abc();

//to call static variable
// check constructor not call when we access static variable .
// it means it is not access by object .
//to access static variable we classname.  
//echo  Abc::$var; 

echo  abc::MAX;





?>