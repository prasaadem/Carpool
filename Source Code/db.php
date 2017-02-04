<?php
// Enter your Host, username, password, database below.
//$con = mysqli_connect("mysql12.000webhost.com","id18655_prasaadem","Cnsape@2923","id18655_register");
$con = mysqli_connect("localhost","id18655_prasaadem","Cnsape@2923","id18655_register");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>