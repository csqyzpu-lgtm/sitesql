<?php
/* ------- Outputting Content ------- */

// Echo - print multiple values, strings, numbers, html, etc

echo 'test', 123, 10.5;

// print - Can't print multiple values, slower than echo

print 123;

// print_r - Can be used to print arrays, Gives a bit more info. 

print_r([1,2,3]);

// var_dump - dump more info of the string 

var_dump(true);
var_dump('hello');
var_dump(['a','b','c']);

//var_export - similar to var_dump() but outputs a string representation of a variable
var_export(true);
var_export('hello');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php echo 'Post One'; ?>
    </h1>
</body>
</html>