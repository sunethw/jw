

<?php
ob_start();
session_start();

$userId= $_POST['userId'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$userRole= $_POST['userRole'];
$location = $_POST['locationName'];
$username = $_POST['username'];
$password = $_POST['password'];

$code = md5($password);
        
require_once '../config/api.php';

$query = "SELECT userId FROM login WHERE userId='$userId';";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) == 0) 
{// User not found. So, add record to the db
	$query = "INSERT INTO login (userId,firstName,lastName,role,location,uid,pwd) VALUES ('$userId','$firstName','$lastName','$userRole','$location','$username','$code');";
	$result = mysqli_query($conn,$query);
}

else // modify selected record
{
	$sql = "UPDATE login SET userId='$userId' , firstName='$firstName', lastName='$lastName', role='$userRole', location='$location' WHERE userId='$userId';";
	$result = mysqli_query($conn,$sql);
	
}

//header("location:add_users.php");

echo "Updated location $username";

?>
<html>
  <head>
    <title>Staff Update</title>
  </head>
  <body>
    <br />
    <a href="add_locations.php">Add Locations</a>
  </body>
</html>
