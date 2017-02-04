<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/login.css" />
<style>
html {
  height: 100%;
  box-sizing: border-box;
}

.footer {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  background-color: #efefef;
  text-align: center;
}
</style>
</head>
<body>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: index.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>
<div class="login">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input id="username" type="text" name="username" placeholder="Username" required />
<input id="password" type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<h1>Not registered yet? <a href='registration.php'>Register Here</a></h1>
</div>
<?php } ?>
<div align="center" class="footer">This website is created by <strong>Aditya Emani</strong> as a part of coursework for TAMU CSCE 608, Database Systems Course<strong> not for commercial purpose.</strong>.</div>
</body>
</html>