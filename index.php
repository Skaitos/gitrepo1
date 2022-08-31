<?php
session_start();
    include("connection.php");
    include("functions.php"); 

    $user_data = check_login($con);
    
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>My website</title>
</head>
<body>
    
    
    <section id="header"><a href="logout.php">Logout</a> <br>
    
  <article>
    <h2>Welcome to my Website!   <?php echo $user_data['user_name']; ?></h2>
  </article>
</section>
<nav>
  <a href="#header">Home</a>
  <a href="#section1">section1</a>
  <a href="#section2">section2</a>
  <a href="#section3">section3</a>
</nav>
<section id="section1">

  <article>
    <h2>section1</h2>
    <p>section1section1section 1section1section1se ction1section1secti on1section1section1section1</p>
    <p>ection1section1secti on1section1sectio n1section1section1section1section1se.</p>
    <p>ection1section1secti on1section1secti on1section1section1sec</p>
    <p>ection1section1section1se ction1section1section1sec tion1section1section1se.</p>
  </article>
</section>
<section id="section2">
  <article>
    <h2>section2</h2>
    <p>section2section2section 2section2section2section2s ection2section2section2.</p>
    <p>section2section2se ction2section2section2 section2section2section2section2section2s</p>
    <p>section2section2sec tion2section2sectio n2section2section2secti on2section2secti</p>
  </article>
</section>
<section id="section3">
  <article>
    <h2>section3</h2>
    <p>section3 section3section3section3section3.</p>
    <p>section3 section3section3section3section3section3 section3section3section3section3section3 section3section3section3section3section3 section3section3section3section3.</p>
    <p>section3 section3section3section3section3section3 section3section3section3section3</p>
    <p>section3 section3section3section3section3section3 section3section3section3section3</p>
  </article>
</section>
      
      

    



     
</body>
</html>