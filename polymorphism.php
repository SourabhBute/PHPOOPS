<?php
/**
 * polymorphism :- same operation may be behave differently in different class.
 * 
 *  we can achieve polymorphism by two ways.
 * 1. Interface 
 * 2. Abstract class  
 * 
 */

 abstract class class1 {
    abstract public function fun1();
 }

 class class2 extends class1 {
    public function fun1() {
        echo "fun1";
    }
 }

 class class3 extends class1 {
    public function fun1() {
        echo "fun2";
    }
 }

 $obj = new class3();
 $obj -> fun1();
?>