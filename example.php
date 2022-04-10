<?php 
class Electronics {

    public $pid ;
    public $pname;
    public $price;

    public function accept($pid, $pname, $price) {
        $this->pid = $pid;
        $this->pname = $pname;
        $this->price = $price; 
    }

    public function show() {
        echo "Product id is : ".$this->pid;
        echo "<br/>Product name is : ".$this->pname;
        echo "<br/>Product Price is : ".$this->price;
    }

}

$obj = new Electronics();
$obj->accept(1, "Mobile", 12000);
//$obj->show();



echo "<pre>";
print_r($obj);

var_dump($obj);



?>