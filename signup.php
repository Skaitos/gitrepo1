




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
            //save to database 
            $user_id = random_num(20);
            $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
            
            mysqli_query($con,$query);

            header("Location: login.php");
            die;

        }else
        {
            echo "Please enter some valid information";
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>

    <style type="text/css">
        
        #pass{

            height: 25px;
            border-radius: 5px;
            padding: 4px;
            width: 100%;
        }
        #confirm_pass{

            height: 25px;
            border-radius: 5px;
            padding: 4px;
            width: 100%;
        }
        
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
                <div style="font-size:20px; margin: 10px; color: white;text-align: center;">Sign Up</div>
                <input id="text" type="text" name="user_name" placeholder = "Username"><br><br>
                <input id="pass" type="password" name="password" placeholder = "Password"><br><br>
                <input id="confirm_pass" type="password" name="confirm_pass" placeholder = "Confirm Password" onkeyup="validate_password()"><br><br>
                <input id="button" type="submit" value="Signup" onclick=""> <br><br>
                <p align="center">
                <span id="wrong_pass_alert"></span>
                </p>
                
            </form>
            
        </div>
        
        <script>
        function validate_password() {
 
            var pass = document.getElementById('pass').value;
            var confirm_pass = document.getElementById('confirm_pass').value;
            if (pass != confirm_pass) {
                document.getElementById('wrong_pass_alert').style.color = 'red';
                document.getElementById('wrong_pass_alert').innerHTML
                  = 'Password Mismatch';
                document.getElementById('button').disabled = true;
                document.getElementById('button').style.opacity = (0.4);
            } else {
                document.getElementById('wrong_pass_alert').style.color = 'green';
                document.getElementById('wrong_pass_alert').innerHTML =
                    'Password Matched';
                document.getElementById('button').disabled = false;
                document.getElementById('button').style.opacity = (1);
            }
        }

    </script>

   
        
    
</body>
</html>