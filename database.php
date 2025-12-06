<?php
    /*extra note:
    The define() function defines a constant.

    Constants are much like variables, except for the following differences:

    A constant's value cannot be changed after it is set
    Constant names do not need a leading dollar sign ($)
    Constants can be accessed regardless of scope
    Constant values can only be strings and numbers
    */

    define('DB_HOST', 'localhost');
    define('DB_USER', 'natalia');
    define('DB_PASS', 'badpassword');
    define('DB_NAME', 'php_dev');

    //create connection with an instances
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    //check connection
    if($conn->connect_error){
        //die function will cut evertyhing off
        die('Connection Failed' . $conn->connect_error);
    }
    //echo 'CONNECTED!';
    ?>
