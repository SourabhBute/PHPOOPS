<?php 
Class test {
    public function test() {
    	echo "contructor called";

    }
	public function mytest() {
		echo "test function call";
	} 	
}

$obj = new test;
$obj->mytest();
?>