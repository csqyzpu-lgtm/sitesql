

<?php

//2 types of form method= GET (default) and POST

//GET can be used as urls and forms posts, 
//name will be displayed at the URL
//so normally this method just used for a search method

//isset = Check whether a variable is empty.
// Also check whether the variable is set/declared:
//use this isset method so it will not display error warning message
if(isset($_POST['submit'])){
    echo $_POST['name'];
    echo $_POST['age'];
}

//POST more secured, can only be used for forms,
//name will be displayed at the URL
//so normally this method used for actually submitting data
//to protect clients privacy

?>
<!--change method to get to see difference-->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label>Name: </label>
        <input type="text" name="name">
    </div>
    <br>
    <div>
        <label>Age: </label>
        <input type="text" name="age">
    </div>
    <br>
        <input type="submit" name="submit" value="Submit">
</form>

<!--<a href="<?php echo $_SERVER['PHP_SELF']; ?>"> click </a>-->

<!--post query string example-->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Natalia&age=23"> click </a>

<!--
extra note:
    To associate the <label> with an <input> element,
    you need to give the <input> an id="" attribute.
    The <label> then needs a for="" attribute whose 
     value is the same as the input's id="".
!-->