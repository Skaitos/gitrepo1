<?php
session_start();

include("connection.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    // check if something was posted
   $user_name = $_POST['user_name'];
   $password = $_POST['password'];

    if(!empty($user_name) && !empty($password))
    {
        //read from database 
        $query = "select * from users where user_name = '$user_name' limit 1";
        
        $result = mysqli_query($con,$query);

       if($result)
       {
        if($result && mysqli_num_rows($result)> 0)
        {

            $user_data = mysqli_fetch_assoc($result);
            
            if($user_data['password'] === $password)
            {
                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: index.php");
                die;
            }
        }
       }
       echo "Wrong username or password";
    }
       
}else
    {
        echo "Please enter some valid information";
    }




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>

    <style type="text/css">
        html { 
            background: url(/images/background.jpg) no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            }
        
        #text{

            height: 25px;
            border-radius: 5px;
            padding: 4px;
            width: 100%;
        }

        #button{
            padding: 10px;
            width: 100px;
            color: white;
            background-color: lightblue;
            border: none;
            display:block;
            margin: 0 auto;
        }

        #box{

            background-color:unset;  
            margin: auto;
            width: 300px;
            padding: 20px;
            align-content:center;
            
        }

        
        </style>

        <div id="box">

            <form method="post">
                <div style="font-size:20px; margin: 10px; color: white;text-align: center;">Login</div>
                <input id="text" type="text" name="user_name"  placeholder = "Username"><br><br>
                <input id="text" type="password" name="password"  placeholder = "Password"><br><br>
                
                <input id="button" type="submit" value="Login"> <br><br>
                <p align="center">
                    <a  href="signup.php">Click here to Signup</a>
                </p>
            </form>
        </div>
</body>
</html>