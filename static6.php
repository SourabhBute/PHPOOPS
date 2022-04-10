<?php 

class abc {
    public static $counter =1;
    public $count = 1;

    public function __construct() {
        self::$counter++;
        $this->count++;
    }

}

$obj = new abc();

echo  $obj->count;

$obj1 =  new abc();

echo  $obj1->count;

$obj2 = new abc();

echo  $obj2->count;

echo "<br>static value of counter<br/>";

echo  abc::$counter;


?>