<?php
/**
 * Interface : it is also called pure abstract class because it only contain set 
 * of abstract method.
 * 
 * We will use method declaration in interface.
 * 
 * it is also used to provide data abstraction , data binding , multiple 
 * inheritance . 
 *
 * All method of interface is public and abstract by default.
 * 
 */

  interface Area {

    public function circle(); 
    public function rectangle();

  }

class Areaimp implements Area {
    public function circle() {
        echo "Area of circle";
    }

    public function rectangle() {
        echo "Area of rectangle";
    }
}

$obj = new Areaimp();
$obj -> circle();
// $obj -> rectangle();
?>