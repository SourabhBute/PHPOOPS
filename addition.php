<?php 

class Add {

    public $a ;
    public $b ;

    public function accept($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }

    public function display() {
        $c =  $this->a + $this->b;
        echo "Sum is ".$c;
    }
}

$obj =  new Add();

$obj->accept(10, 20);

$obj->display();

//print_r($obj);






?>