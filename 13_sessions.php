<?php
session_start();

if(isset($_POST['submit'])){
    $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];
    
    echo $username;

    if ($username=='natalia' && $password=='123badpassword'){
        $_SESSION['username'] = $username;
        header('Location: /php-crash/extras/dashboard.php');
    } else {
        echo 'Incorrect Login';
    }
}
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Natalia&age=23"> New Login </a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label>Username: </label>
        <input type="text" name="username">
    </div>
    <br>
    <div>
        <label>Password: </label>
        <input type="password" name="password">
    </div>
    <br>
        <input type="submit" name="submit" value="Login">
</form>