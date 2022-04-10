<?php 

// inheritance - accessing property from one class to another class 

class  A  {
    
    function __construct() {
        
        echo "Construct1";
    }

    function fun1() {
        echo "Hello World";
    }
}

class B extends A {

}

$obj = new B();

?>