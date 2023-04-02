<!DOCTYPE html>
<html lang="en">
<head>
    <style>
         
         
         body {
            font-family: Arial, sans-serif;
            margin-top: 30px;
            margin-left: 20px;

        }
        label {
          display: inline-block;
          width: 100px;
          text-align: right;
        }
        input[type="text"], input[type="email"], textarea {
          display: inline-block;
          width: 200px;
        }

        input[type="submit"] {
            margin-left: 104px;
            background-color: pink;
            color: white;
            font-size: 18px;
            padding: 10px 20px;
        }
      </style>
</head>
<body>

    <?php

    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        echo "<h1>Welcome, " . $_POST['fname'] . " " . $_POST['lname'] ."!" . "<br>" ."</h1>";
        echo "<h2> Your email is: <i>" . $_POST['email'] . "</i>" . "<br>" . "</h2>";

        $pwd_length = strlen($_POST['pwd']);

        echo "Your password has <i><strong>" . $pwd_length . "</i></strong> characters.<br>";
        if ($_POST['pwd']===$_POST['cpwd']){
            echo "Your password and confirm password <strong style='color:green;'>MATCH</strong>." . "<br>";
        }else{
            echo "Your password and confirm password <strong style='color:red;'> DO NOT MATCH</strong>." . "<br>";

        }

    }else{
        echo "<strong>Sorry, you cannot access this URL directly.</strong>";
    }

    ?>
    </body>
    </html>