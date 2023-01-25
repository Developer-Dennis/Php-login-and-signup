<?php

session_start();
   include("connection.php");
   include("functions.php");

$user_data = check_login($con);


?>

<html>
    <head>
        <title>My Website</title>
    </head>
    <body>
        <a href="logout.php">logout</a>
       <h1>This Is The Index page</h1>
       <br>
       Hello, username
    </body>
</html>