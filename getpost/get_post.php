<?php
  define("TITLE", "PHP Syntax");

  if( isset( $_POST["post_submit"] ) ) {

      // build a function that validates data
      function validateFormData( $formData ) {
          $formData = trim( stripslashes( htmlspecialchars( $formData ) ) );
          return $formData;
      }

      // check to see if inputs are empty
      // create variables with form data
      // wrap the data with our function

      if( !$_POST["post_name"] ) {
          $nameError = "Please enter your name <br>";
      } else {
          $name = validateFormData( $_POST["post_name"] );
      }

      if( !$_POST["post_email"] ) {
          $emailError = "Please enter your email <br>";
      } else {
          $email = validateFormData( $_POST["post_email"] );
      }

  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo TITLE ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
    <h1><?php echo TITLE; ?></h1>

      <?php

      //$_GET and $_POST store an associative array with the form data that was submit
      //Super globals

       ?>
       <h2>Get Form</h2>
       <form action="form_get.php" method="GET">
         <input type="text" name="name" placeholder="name">
         <input type="text" name="email" placeholder="email">
         <input type="submit" name="form_submit" value="SUBMIT">
       </form>

       <br><br>
       <h2>Post Form</h2>
       <form action="form_post.php" method="POST">
         <input type="text" name="post_name" placeholder="name">
         <input type="text" name="post_email" placeholder="email">
         <input type="submit" name="post_submit" value="SUBMIT">
       </form>

       <br><br>
       <h2>Post Form Current Page</h2>
       <!-- htmlspecialchars prevents non HTML data from entering a form -->
       <p class="text-danger">* Required Fields</p>
       <form action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"]); ?>" method="POST">
         <small class="text-danger">* <?php echo $nameError ?></small>
         <input type="text" name="post_name" placeholder="name">
          <small class="text-danger">* <?php echo $emailError ?></small>
         <input type="text" name="post_email" placeholder="email">
         <input type="submit" name="post_submit" value="SUBMIT">
       </form>

       <?php

           if( isset($_POST["post_submit"]) ) {
               echo "<h4>Your info</h4>";
               echo "$name <br> $email <br>";
           }

       ?>

    </div>

    <!-- jQuery -->
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
