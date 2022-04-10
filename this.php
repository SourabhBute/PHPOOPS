<?php 
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

$obj = new Test(10, 20);
$obj1 = new test(300, 400);

// echo "<pre>";
// print_r($obj);
?>