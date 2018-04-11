<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Syntax</title>
  </head>
  <body>
    <?php

      $helloWorld = "Hello World";
      // echo $helloWorld;

      $loggedIn = true; //Boolean
      $myAge = 35; //Integer
      $totalPrice = 146.28; //Floating Point
      $fullName = "Cathleen Wright"; //String

      echo "$helloWorld, my name is $fullName.";

      //CONTSTANTS
        //UPCASE -> Example, define above HTML structure, php in <title>
      define( "TITLE", "PHP Variables & Constants");
      echo TITLE;

    ?>
  </body>
</html>
