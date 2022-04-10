<?php 
include "incclass1.php";
include "incclass2.php";

$obj = new class1\Abc();
$obj -> hello();

$obj =  new class2\Abc();
$obj -> hello();

?>