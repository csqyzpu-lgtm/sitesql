<?php 
/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable naming Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'Natalia'; //string
$age = '23'; //integer
$sleeping_on_weekend = false; //boolean
$cash_on_hand = 20.50; //float 

print $name;
echo ' is ' . $age . ' years old';
//or echo "is $age years old";
//or "is {$age} years old";

//printing name is different with javascript, notice '5'+'5' will sum while in js it will be a string (output: '55');
$x = '5' + '5';
$y =  5 - 10;
echo $y;


//printing constance/ value that wont be changed again;
define("CONSTANT", "Hello world.");
echo CONSTANT; // outputs "Hello world."
//echo Constant; // outputs "Constant" and issues a notice.

define('ANIMALS', array(
    'dog',
    'cat',
    'bird'
));
echo ANIMALS[1]; // outputs "cat"

?>
