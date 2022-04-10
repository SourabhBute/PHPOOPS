<?php 
//Method Overriding -  

//Inheritance 

// ablity to take more than on form .

// __call() // magic method .


class dad {
    
    public function bike() {
        echo "bike";
    }
}

class son extends dad {

    public function bike() {
        echo  "New Bike";
    }
}

$obj = new son();
$obj->bike();



?>