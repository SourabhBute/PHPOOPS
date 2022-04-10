<?php 
abstract class A{ 
   protected  $name;   
    function __construct($n) {
       $this->name = $n;
    }
   abstract protected function getName();
}
class B extends A {
    public function getName() {
        return $this->name;
    }
}

$obj = new B("Ajay");
echo  $obj->getName();
?>

