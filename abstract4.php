<?php 
abstract class class1{
   abstract function myfun();     
   public function __construct() {
       echo "Construct1";
   }  
}
class class2 extends class1 {
    public function __construct() {
        echo "Construct2";
    }
       
    function  myfun() {
        echo "My Fun called";
    }    
}
$obj = new class2();
$obj->myfun();
?>