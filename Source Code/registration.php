<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/registration.css" />
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
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='login'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="login">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input id="username" type="text" name="username" placeholder="Username" required />
<input id="username" type="password" name="password" placeholder="Password" required />
<input id="username" type="text" name="email" placeholder="Email" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
<div align="center" class="footer">This website is created by <strong>Aditya Emani</strong> as a part of coursework for TAMU CSCE 608, Database Systems Course<strong> not for commercial purpose.</strong>.</div>
</body>
</html>