<?php
/* ---------- String Functions -------- */

// Formatted Strings - useful when you have outside data
// //the x syntax after the % will format arguments differently, ex %f to format argument as floating number, etc.
//https://www.w3schools.com/php/func_string_printf.asp
//https://www.php.net/manual/en/function.printf


printf("my name is %s im %d yo in Earth, %2\$b yo in Matrix", 'natalia', 23);

$number = 123;
printf("With 2 decimals: %1\$.2f
<br>With no decimals: %1\$u",$number);


// HTML Entities
//The htmlentities() function converts characters to HTML entities.
//Tip: To convert HTML entities back to characters, use the html_entity_decode() function.

$string2 = '<h1>Hello World</h1>';
echo htmlentities($string2);


/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/

$string = 'Hello World';

// Get the length of a string
echo strlen($string);

// Find the position of the first occurrence of a substring in a string
echo strpos($string, 'o');

// Find the position of the last occurrence of a substring in a string
echo strrpos($string, 'o');

// Reverse a string
echo strrev($string);

// Convert all characters to lowercase
echo strtolower($string);

// Convert all characters to uppercase
echo strtoupper($string);

// Uppercase the first character of each word
echo ucwords($string);

// String replace
echo str_replace('World', 'Everyone', $string);

// Return portion of a string specified by the offset and length
//char 0 until 5
echo substr($string, 0, 5);
//every char after 5
echo substr($string, 5);

// Starts with
if (str_starts_with($string, 'Hello')) {
  echo 'YES';
}

// Ends with
if (str_ends_with($string, 'ld')) {
  echo 'YES';
}

?>