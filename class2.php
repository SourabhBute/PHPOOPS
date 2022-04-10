<?php 

class class1 {

   public function __construct() {
        //echo "start";
        echo $x = 10;
        
   }

   public function fun1() {
       echo  "Hello";
   }

   public function __destruct() {
        echo "end";
   }   
}

$obj =  new class1();

$obj->fun1();

echo "<pre>";
print_r($obj);




?>