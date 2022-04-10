<?php 

class class1 {    
    public $x = 1;
    function fun1() {
        return $this->x++;
        //echo "fun1";
    }    
}

$obj = new class1();
$obj2 = new class1();


$obj->fun1();
echo $obj->x;

echo "<br/>";

$obj2 = new class1();
echo $obj2->x;

?>