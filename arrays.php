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
        echo "<hr>";
        // PLAIN VARIABLES
        $username   = "johndoe";
        $fullName   = "John Doe";
        $age        = 32;
        $gender     = "male";
        $country    = "Mexico";

        // SIMPLE ARRAY
        $user   = array(
                    "johndoe",  // 0
                    "John Doe", // 1
                    32,         // 2
                    "male",     // 3
                    "Mexico"    // 4
                );

        // ECHO THE VALUES OF THE ARRAY
         // . joins string and variable (+concat)
        echo "<h3>Simple Array Echo</h3>";
        echo $user[0] ."<br>";
        echo $user[1] ."<br>";
        echo $user[2] ."<br>";
        echo $user[3] ."<br>";
        echo $user[4] ."<br>";
        echo "<hr><br>";


        // ASSOCIATIVE ARRAYS
        $people = array(
                    //key => value
                    "username"  =>  "johndoe",
                    "fullname"  =>  "John Doe",
                    "age"       =>  32,
                    "gender"    =>  "male",
                    "country"   =>  "Mexico"

                );

        // ECHO THE VALUES OF THE ASSOCIATIVE ARRAY
        echo "<h3>Associative Array Echo</h3>";
        echo $people["username"] ."<br>";
        echo $people["fullname"] ."<br>";
        echo $people["age"] ."<br>";
        echo $people["gender"] ."<br>";
        echo $people["country"] ."<br>";
        echo "<hr><br>";

        // MULTI-DIMENSIONAL ARRAY
        $employees  = array(

                        array( // index of 0

                            "username"  =>  "johndoe",
                            "fullname"  =>  "John Doe",
                            "age"       =>  32,
                            "gender"    =>  "male",
                            "country"   =>  "Mexico"

                        ),
                        array( // index of 1

                            "username"  =>  "janedoe",
                            "fullname"  =>  "Jane Doe",
                            "age"       =>  27,
                            "gender"    =>  "female",
                            "country"   =>  "Canada"

                        )

                    );

        // ECHO THE VALUES OF MULTI-DIMENSIONAL ARRAY
        echo "<h3>Multi Dimensional Array Echo</h3>";
        echo "<hr><br>";
        echo $employees[0]["fullname"] ."<br>";
        echo $employees[1]["username"] ."<br>";

    ?>

</div>

    <!-- jQuery -->
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
