<?php
    //GLOBAL inside a function
    function registerUser(){
        global $example1;
        $example1 = 1;
        echo 'User '.$example1. ' Registered<br>';
    } 
    registerUser();
    
    //function variable is NOT GLOBAL scope unless you put global $var inside that function
    echo $example1 . '.) this will throw Warning without entering GLOBAL inside your function<br>';

    //ARGUMENT vs PARAMETER in function
    //here $bloodtype is parameter
    function registerType($bloodtype, $name){
        echo $bloodtype . ' registered as ' . $name . '\'s bloodtype<br>';
    }
    //and (B+) is argument
    registerType('B+', 'natalia');

    //DEFAULT VALUE parameter used ass fallback if user input nothing
    function sum($n1 = 6,$n2 =14){
        return $n1 + $n2;
    }

    $total = sum(3);
    echo $total.'<br>';

    //ANONYMUS FUNCTION VARIABLE ASSIGNMENT
    $substract = function($n1, $n2){
        return $n1 - $n2;
    };

    echo $substract(10, 5).'<br>';

    //ARROW FUNCTION, use '=>' instead of 'return'
    $multipy = fn($n1 = 5 , $n2= 2) => $n1*$n2;
    echo $multipy();

?>