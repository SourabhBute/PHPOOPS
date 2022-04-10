<?php 
class class1 {
    public $num;  
    public function __construct() {
        $this->num =1;
        echo "Constructor 1  ";
    }
}

class class2 extends class1 {

    public function __construct() {
        parent:: __construct();
        $this->num = 2;      
        echo "Constructor 2 ";
    }
}

$obj = new class2();

// echo "<pre>";
// print_r($obj);

echo $obj->num;
?>