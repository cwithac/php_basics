<?php
  define("TITLE", "PHP Syntax")
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
        function myFirstFunction() {
          echo "This is my first function with no arguments.<br>";
        }

        myFirstFunction();

        function singleArgumentFunction($a) {
          do {
            echo "$a ";
            $a++;
          } while ($a < 10);
        }

        singleArgumentFunction(5);

        function functionWithArguments($a, $b) {
          $c = $a + $b;
          echo "<br>The sum of $a and $b is $c.";
        }

        functionWithArguments(5, 10);
       ?>

    </div>

    <!-- jQuery -->
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
