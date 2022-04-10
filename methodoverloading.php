<?php 

//method overloading and polymorphism both are same thing.

//ability to take more than one form is called polymorphism.

// method overloading is possible only in single class.

// We can not define data type in php  that's why method overloading is not possible in php.
// but it's  doesn't mean we can not achieve method overloading in php . we can achieve method 
// overloading in php  by magic methods __call().

// example of method overlaoding is programer because programer perform multiple task like testing , 
// designing , development. 

class programer {

    public function programer() {
        echo "devloper";
    }

}

?>