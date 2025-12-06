<!--include vs require:
    Include means even if the link couldn't be found the rest of the code wont crash, require is the reverse.-->
<?php include 'inc/header.php'; ?>

<?php
  //shorthand to create 3 empty $variable
  $name = $email = $body = '';
  //3 var for error handling - show error message under input box
  $nameErr = $emailErr = $bodyErr = '';

  //Form submit
  if(isset($_POST['submit'])){

    //Validation and error handling
    //validate name
    if(empty($_POST['name'])){
      $nameErr = 'Name is required';
    } else {
      $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    }

    //Validate email
    if(empty($_POST['email'])){
      $emailErr = 'Email is required';
    } else {
      $email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_SPECIAL_CHARS);
    }

    //validate feedback/body
    if(empty($_POST['body'])){
      $bodyErr = 'Leave us your message! ';
    } else {
      $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_SPECIAL_CHARS);
    }

    //Adding submissions to database
    if(empty($nameErr) && empty($emailErr) && empty($bodyErr)){
      //add to database
      $sql = "INSERT INTO feedback(name, email, body) VALUES ('$name', '$email', '$body')";
      if(mysqli_query($conn, $sql)){
        //success
        //use header to redirect page
        header('Location: feedback.php');
      } else {
        'Error: ' . mysqli_error($conn);
      }
    }
  }
?>
    <img src="/php-crash/feedback/img/logo-moonton.png" class="w-25 mb-3" alt="">
    <h2>Feedback</h2>
    <p class="lead text-center">Leave feedback for Moonton Media</p>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" class="mt-4 w-75">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control <?php echo $nameErr ? 'is-invalid' : null; ?>" id="name" name="name" placeholder="Enter your name">
        <div class="invalid-feedback">
          <?php echo $nameErr; ?>
        </div> 
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control <?php echo $emailErr ? 'is-invalid' : null; ?>" id="email" name="email" placeholder="Enter your email">
        <div class="invalid-feedback">
          <?php echo $emailErr; ?>
        </div> 
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Feedback</label>
        <textarea class="form-control <?php echo $bodyErr ? 'is-invalid' : null; ?>" id="body" name="body" placeholder="Enter your feedback"></textarea>
        <div class="invalid-feedback">
            <?php echo $bodyErr; ?>
        </div> 
      </div>
      <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
      </div>
    </form>
<?php include 'inc/footer.php'; ?>
