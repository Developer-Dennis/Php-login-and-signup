<?php
    function check_login($con){
        if(isset($_SESSION['user_id'])){
            $id = $_SESSION['user_id'];
            $query = "select * from users where user_id = '$id' limit 1";
            $results = mysqli_query($con, $query);
            if($results && mysqli_num_rows($results) > 0){

                $user_data = mysqli_fetch_assoc($results);
                return $user_data;

            }

        }

   // redirect to login
    header("Location: login.php");
    die();
    };

?>