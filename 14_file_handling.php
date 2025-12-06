<?php

$file = 'extras\users.txt';

if(file_exists($file)){
    //readfile is not very flexible to read text file
    //echo readfile($file);

    //use this instead, pointer that refer to a file,
    //one of a mode to choose: 'r' -> to read, 'w' ->write
    //file open
    $handle = fopen($file, 'r');
    //file read ( takes in the stream /handle + size of the file)
    $contents = fread($handle, filesize($file));
    //file close
    fclose($handle);
    //display the contents
    echo $contents;
}   else {
    //if file doesnt exist then create/write a new one withe $file
    //$file is a created file (line 3) that has a name of a new file
    $handle = fopen($file, 'w');
    //PHP_EOL : line break in php
    $contents = 'The New User'. PHP_EOL . 'Neo'. PHP_EOL . 'Morpheus'. PHP_EOL . 'Trinity'. PHP_EOL . 'Gaetan';
    //write the file with the created handle file with content inside 
    fwrite($handle, $contents);
    //close the file
    fclose($handle);
}
?>