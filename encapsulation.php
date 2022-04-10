<?php 
class test {
    
   protected $num;
   function test() {
       $this->num = 1;
   } 

}

$obj =  new test();
echo  $obj->num = 2;
?>