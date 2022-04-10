<?php 
// constructor in php 

class test {
    public $a;
    public $b;
    
    public function test() {
        echo "Automatically called function";
    }
    // This is called magic method and priority is given to below method and it is the second way to call comntructor.
    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }

    public function myfun() {
        echo "my function callled";
    }
}

$obj = new test(10, 20);
echo "<pre>";
print_r($obj);
//$obj->myfun();
?>  