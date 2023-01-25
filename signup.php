<?php


?>

<html>
    <head>
        <title>SignUp</title>
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

                <input id="button" type="submit" value="signup"><br><br>

                <a href="login.php">Click to Login </a><br><br>

       </div>
    </body>
</html>

