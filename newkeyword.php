<?php 
/* 
   New keyword
   ============
   1) it is initialize the variable .
   2) it is call the constructor.
   3) it is placed in ZVAL Container.
   
*/

class test {

    public $a;
    public $b;

    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;

        echo "<pre>";
        print_r($this);
    }
}

$obj = new test(10, 20);
$obj1 = new test(30, 40);

echo "<pre>";
var_dump($obj);
var_dump($obj1);

?>