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

            //WHILE LOOPS
            $startingNum = 1;
            while ($startingNum < 10) {
              echo "<ul>";
              echo "<li>" . $startingNum . "</li>";
              echo "</ul>";
              $startingNum++;
            }

            echo "<hr><br>";

            //FOR LOOPS
            for ($a = 30; $a <=40; $a++) {
              echo "<ul>";
              echo "<li>" . $a . "</li>";
              echo "</ul>";
            }

            echo "<hr><br>";

            //FOR EACH LOOPS
            $friends = array('Bob', 'Sam', 'Jim', 'Sue');
            // foreach ($array as $value)
            foreach ($friends as $friend) {
              echo "<ul>";
              echo "<li>" . $friend . " is my friend!</li>";
              echo "</ul>";
            }

            echo "<hr><br>";

            //DO WHILE LOOP (action before condition)
              // do {
              //
              // } while (condition);
            $foo = 10;
            do {
              echo "<ul>";
              echo "<li> Foo is: " . $foo . "</li>";
              echo "</ul>";
              $foo++;
            } while ($foo <= 20);

       ?>

  </div>

    <!-- jQuery -->
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
