<?php 

/*if(isset($_POST['submit'])){
    echo $_POST['name'];
    echo $_POST['age'];
}*/

//first method htmlspecialchars 
if(isset($_POST['submit'])){
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    echo $name;
}

//second method filter_input
if(isset($_POST['submit'])){
    $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST,'age',FILTER_SANITIZE_SPECIAL_CHARS);
    echo $name;
}

/*
The input type to check for:
INPUT_GET
INPUT_POST
INPUT_COOKIE
INPUT_SERVER
INPUT_ENV
*/

//third method filter_var
$email = "john.doe@example.com";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}

/*extra note:
 htmlspecialchars() 
    often used to prevent browsers from using it as an HTML element.
    This can be especially useful to prevent code from running 
    when users have access to display input on your homepage

    The predefined characters are:
        & (ampersand) becomes &amp;
        " (double quote) becomes &quot;
        ' (single quote) becomes &#039;
        < (less than) becomes &lt;
        > (greater than) becomes &gt;

*/
?>
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Natalia&age=23"> click </a>

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