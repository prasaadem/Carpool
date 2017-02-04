<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
    border-right:1px solid #bbb;
}

li:last-child {
    border-right: none;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}

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
<div class="form">
<ul>
  <li><a href="dashboard.php">Dashboard</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
<h1 align="center">Greetings from Carpool</h1>
<h1 align="center">Welcome <?php echo $_SESSION['username']; ?>!</h1>

<p align="center">Carpool is an easy trasit for everyone. -Share Ride/Fair Ride</p>
<p align="center">You can access all the information from your dashboard.</p>
</div>
<div align="center" class="footer">This website is created by <strong>Aditya Emani</strong> as a part of coursework for TAMU CSCE 608, Database Systems Course<strong> not for commercial purpose.</strong>.</div>
</body>
</html>