<?php
require('db.php');
include("auth.php");
$status = "";
if(isset($_POST['radio']))
{
    $id =$_REQUEST['radio'];
$username = $_SESSION["username"];
$ins_query="INSERT INTO booking (book_id,user_name) VALUES ('$id','$username')";
        if(mysqli_query($con,$ins_query))
{
$status = "Booked ride Successfully.
    </br></br><a href='history.php'>View Ride History</a>";
}
}
?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
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
<h1>Book a Ride</h1>
<br>
<table width="100%" border="1" style="border-collapse:collapse;", name="table">
<thead>
<tr>
<th><strong>Ride Id</strong></th>
<th><strong>Posted By</strong></th>
<th><strong>Source</strong></th>
<th><strong>Destination</strong></th>
<th><strong>Cost</strong></th>
<th><strong>Start Time</strong></th>
<th><strong>Book</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from Ride_Meter r where r.name_user!='".$_SESSION["username"] ."';";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<td align="center"><?php echo $row["Ride_id"]; ?></td>
<td align="center"><?php echo $row["name_user"]; ?></td>
<td align="center"><?php echo $row["source_loc"]; ?></td>
<td align="center"><?php echo $row["Destnation"]; ?></td>
<td align="center"><?php echo $row["cost"]; ?></td>
<td align="center"><?php echo $row["Start_date"]; ?></td>
<form name="form" method="post" action=""> 
<td align="center"><label><input type="radio" name="radio" value="<?php echo $row["Ride_id"]; ?>"><?php echo $row["Ride_id"]; ?></label></td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
<p><input name="submit" type="submit" value="Book" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</body>
</html>