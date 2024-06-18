<?php
$test  = "variable scope";

// accessing outer scope variable
function one(){
    global $test;
    echo $test;
}

// accessing outer scope variable using superglobal
function two(){
    echo $GLOBALS["test"];
}

one();
two();

// class scope
class TestClass{
    public $classvar = "Hello PHP!";

    public function classFunction(){
        echo $this->classvar;
    }
}

$obj = new TestClass();

$obj->classFunction();