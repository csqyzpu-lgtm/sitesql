<?php

 //allowed type of files
 $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');

 //if the form is submitted / clicked
 if(isset($_POST['submit'])){

    if(!empty($_FILES['upload']['name'])){
        print_r($_FILES['upload']);
        echo '<br>';
        print_r($_FILES['upload']['name']);
        echo'<br>';
        $file_name = $_FILES['upload']['name'];
        $file_size =  $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];

        //exact directory to upload this file
        $target_directory = "uploads/${file_name}";

        //get uploaded file type :
        //explode(string separator + target string var)
        $file_ext = explode('.', $file_name);
        //end() to get last string and current()to get first string
        $file_ext = strtolower(end($file_ext));

        //echo $file_ext;

        //validate file ext
        if(in_array($file_ext, $allowed_ext)){
            //then validate file size too, 1000000bytes = 1MB
            if($file_size <= 1000000) {
                //upload file
                move_uploaded_file($file_tmp, $target_directory);

                // Success message
                echo '<p style="color: green;">File upload successful!</p>';
            } else {
                echo '<p style="color: red;">Upload file lower than 1MB</p>';
            }
        } else {
            $message = '<p style="color:red;">Invalid file type</p>';            
        }
    } else {
        $message = '<p style="color:red;">Please choose a file</p>';
    }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <?php echo $message ?? null; ?>
    <!--enctype="multipart/form-data" is must used attribute on form to upload a file-->
    <form action="<?php echo htmlspecialchars(
        $_SERVER['PHP_SELF']
        ); ?>" method="post" enctype="multipart/form-data">
    Select image to upload:<br>
    <input type="file" name="upload"></br>
    <input type="submit" value="Submit" name="submit">
</form>


</body>
</html>
