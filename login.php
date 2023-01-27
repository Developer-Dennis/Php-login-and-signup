<?php

session_start();
   include("connection.php");
   include("functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST"){
    // SOMETHING WAS POSTED
   $user_name = $_POST['user_name'];
   $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){

        // read from database
        $user_id = random_num(20);
            $query = "select * from users where user_name = '$user_name' limit 1";
       $results = mysqli_query($con,$query);

       if($results){
            if($results && mysqli_num_rows($results) > 0){

                $user_data = mysqli_fetch_assoc($results);

                if ($user_data['password'] === $password);{
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    die;
                }
            }

       }

            
        } else {
            echo "Please enter some valid information";
    };
}
  

?>

<html>
    <head>
        <title>Login</title>
    </head>
    <body>
       <style type="text/css">
            #text{
                height:25px;
                border-radius:5px;
                padding: 4px;
                border:solid thin #aaa;
                width:100%;
            }
            #button{
                padding:10px;
                width:100px;
                color:white;
                background-color: lightblue;
                border:none;
            }
            #box{
                background-color: grey;
                margin: auto;
                width:300px;
                padding:20px;
            }
       </style>
       <div id="box">
            <div style="font-size:20px; margin:10px; color:white;">Login</div>
            <form method="post">
                <input id="text" type="text" name="user_name"><br><br>
                <input id="text" type="password" name="password"><br><br>

                <input id="button" type="submit" value="Login"><br><br>

                <a href="signup.php">Click to SignUp </a><br><br>

       </div>
    </body>
</html>

