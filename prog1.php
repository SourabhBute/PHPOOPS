<?php 
class Bank {
	public function bank() {
		//echo "Contructor called";
	}
	public function deposit($a,$b) {
		//echo $a;
        echo "<pre>";
		print_r($b);
		//echo "Money deposit Sucessfully";
	}
	public function withdraw() {
		echo "Money is withdraw";
	}
}

$obj = new bank;

$array = ['a'=>10, 'b'=>20, 'c'=>30];

$obj->deposit(1000,$array);

//$obj->withdraw();

?>