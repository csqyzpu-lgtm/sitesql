<?php
/*
    Way to deal with fatal error: uncaught exception elegantly 
  PHP has an exception model similar to that of other programming languages.
   An exception can be thrown, and caught ("catched") within PHP.
    Code may be surrounded in a try block, to facilitate the catching of potential exceptions.
     Each try must have at least one corresponding catch or finally block.
*/

function inverse($x){
    //if $x is false or $x = zero then throw new Exception 
    if(!$x){
        throw new Exception('Division by zero');
    }

    return 1/$x;
}

    /*
    The object operator, -> , is used in object scope to access methods
    and properties of an object. It's meaning is to say that what is on
    the right of the operator is a member of the object instantiated
    into the variable on the left side of the opera.

    The getMessage() method returns a description of the error 
    or behaviour that caused the exception to be thrown.

    more explanation : https://www.webdevsplanet.com/post/php-double-arrow-vs-object-operator
    */
    try {
        echo inverse(5) . ' ';
        } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), ' ';
        } finally {
        echo 'First finally ';
        }
        
        try {
        echo inverse(0) . ' ';
        } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), ' ';
        } finally {
        echo "Second finally ";
        }
?>
