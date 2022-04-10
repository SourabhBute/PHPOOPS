<?php

class class1 {

  public $a;
  protected $b;
  private $c =20;

  public function __construct() {
    echo  "Construct1";
  }
  
} 

class class2 extends class1 {

   private $c =10;

   public function show() {
      echo  "value of c". $this->c;
   }

}

$obj = new class2();
$obj->show();

echo "<pre>";
print_r($obj);


?>





