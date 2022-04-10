<?php 
class class1 {
    
    public function __construct() {
        echo "Construct1";
    }

    public function show() {
        echo "parent class show called";

    }

}

class class2 extends class1 {

    public $a =10;

    public function __construct() {
       
        echo "construct2";
        //class1:: __construct();
        //parent:: __construct();
        //self::show();
         $this->show();

        // echo "<pre>";
         //var_dump($this);
        // print_r($this);        
    } 

}

$obj = new class2();

?>