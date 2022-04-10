<?php 
class class1 {
    protected $num;
    public function __construct() {
        $this->num = 2;        
        //echo "Constructor called";
    }

    function getNum() {
       return $this->num;
    }

}
 
$obj = new class1();
//echo $obj->num; // You can not able to access protected properties outside of the class

echo  $obj->getNum();




?>