<?php

// Including connect file
require_once "connect.php";
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    
    <style>
            body  {
			background-image: url('https://wallpapercave.com/wp/wp5134857.png');
		 background-repeat: repeat;
		 background-size: fit;
		} 
  </style>
  </head>
  <body>
    <div class="navbar">
 
      <a href="mainpage.html">Home</a>
        <a href="anime.html">Anime</a>
      <a href="animemovies.html">Movies</a>
       <a href="external websites.html">Watch Now</a>
        <a href="anepal.html">Anime In Nepal</a>
            <div class="dropdown">
              <button class="dropbtn">LogIn/SignUp
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
              <a href="login.php">Log In</a>
              <a href="register.php">Sign Up</a>
              </div>
            </div>
        </div>
       
<link rel="stylesheet" href="css\reg.css">
<link rel="stylesheet" href="Nav.css">
<div class="container">
        <img src="signup.png">
        <b><p><font size="+2" color="Skyblue">Please fill this form to create an account</font></p></b>
        <div class="txt">
            <form action="process.php" method="POST">
                <i class="fa fa-user"></i>
                <input type="text" placeholder="UserName" name="UName">
        </div>
        <div class="txt">
                <i class="fa fa-envelope"></i>
                <input type="email" placeholder="Email" name="Email">
        </div>
        <div class="txt">
                <i class="fa fa-lock"></i>
                <input type="password" placeholder="Password" name="Password">
        </div>
        <div class="txt">
                <i class="fa fa-lock"></i>
                <input type="password" placeholder="Confirm Password" name="CPassword">
        </div>
            <button class="btn" name="btn"> Signup </button>
            <p>Already have an account? <a href="login.php">Login here</a></p>
      </form>
</div>   

</body>
</html>
           
