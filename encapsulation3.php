<?php 
class class1 {
    protected $num;
    
    public function __construct() {
        $this->num = 1;
    }

    protected  function getData() {
      echo $this->num;
    }
}
class class2 extends class1 {
    
    public function getData() {
        echo $this->num;
    }
}

$obj = new class2();

echo  $obj->getData();
//echo $obj->num=3;




?>