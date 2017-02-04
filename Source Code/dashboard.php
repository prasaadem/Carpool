<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
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

<div align="center" class="footer">This website is created by <strong>Aditya Emani</strong> as a part of coursework for TAMU CSCE 608, Database Systems Course<strong> not for commercial purpose.</strong>.</div>
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
  <li><a href="index.php">Home</a></li>
  <li><a href="insert.php">Post a Ride</a></li>
  <li><a href="cancelride.php">Cancel Posted Ride</a></li>
  <li><a href="view.php">View Available Rides</a></li>
  <li><a href="history.php">Cancel Booked Ride</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
<h1 align="center">Welcome to Carpool Dashboard.</h1>
<p align="center">Home takes you to dashboard</p>
<p align="center">If you are a driver, to post a ride, navigate to "Post a Ride"</p>
<p align="center">If you are a driver, to cancel a posted ride, navigate to "Cancel posted Ride"</p>
<p align="center">If you are a passenger, to book a ride, navigate to "View Available Rides"</p>
<p align="center">If you are a passenger, to cancel a booked ride, navigate to "Cancel Booked Ride"</p>
<p align="center">Remember, your session is stored. To logout of your account, navigate to Logout</p>
</div>
<div align="center" class="footer">This website is created by <strong>Aditya Emani</strong> as a part of coursework for TAMU CSCE 608, Database Systems Course<strong> not for commercial purpose.</strong>.</div>
<div align="center" class="footer">This website is created by <strong>Aditya Emani</strong> as a part of coursework for TAMU CSCE 608, Database Systems Course<strong> not for commercial purpose.</strong>.</div>
</body>
</html>