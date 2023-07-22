<?php 

include 'connect.php';

session_start();

error_reporting(0);

if (isset($_SESSION['UName'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['Email'];
	$password = md5($_POST['Password']);

	$sql = "SELECT * FROM users WHERE Email='$email' AND Password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['UName'] = $row['UName'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    
    <style>
body  {
			background-image: url('https://wallpapercave.com/wp/wp5134857.png');
		 background-repeat: repeat;
		 background-size: fit;
		} 
    body{margin: 0;}
</style>
<link rel="stylesheet" href="../css/Nav.css">
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

    <link rel="stylesheet" href="login.css">
    <div class="container">
      <center><img src="login.jpg"> </center>
   <p><font size="+3" color="Pink">Please fill in your credentials to login</font></p>
       <form action="" method="POST" class="login-email">
            <div class="txt">
                <i class="fa fa-envelope"></i>
                <font size="+1" color="white">Email:</font>
                <input type="text" placeholder="Email" name="Email" value="<?php echo $email; ?>" required></div>
            <div class="txt">
            <font size="+1" color="white">Password:</font>
            <input type="password" placeholder="Password" name="Password">
            </div>
            <div class="form-input">
              <a href="welcome.php">  <input type="submit" class="btn" value="Login" value="<?php echo $_POST['password']; ?>" required></a>
            </div>
            <font size="+1" color="white"><p>Don't have an account? <a href="register.php">Sign up now</a></p></font>
        </form>
    </div>
</body>
</html>