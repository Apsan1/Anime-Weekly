<?php 

session_start();

if (!isset($_SESSION['UName'])) {
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body  {
			background-image: url('https://wallpapercave.com/wp/wp5134857.png');
		 background-repeat: repeat;
		 background-size: fit;
		} 
        </style>
        </head>
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

    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Logout</a>
</body>
</html>