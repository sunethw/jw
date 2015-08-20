

<?php
ob_start();
session_start();

$LocationCode= $_POST['LocationCode'];
$LocationName = $_POST['LocationName'];

require_once '../config/api.php';

$query = "SELECT locationCode FROM locations WHERE locationCode='$LocationCode' ; ";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) == 0) 
{// User not found. So, add record to the db
	$query = "INSERT INTO Locations (locationCode,locationName) VALUES ('$LocationCode','$LocationName');";
	$result = mysqli_query($conn,$query);
}

else // modify selected record
{
	$sql = "UPDATE staff_details SET Name='$name' , Phone='$phone', Address='$address', Salary='$salary', Department='$department' WHERE id='$staff_Id';";
	$result = mysqli_query($conn,$sql);
	
}

header("location:add_locations.php");

echo "Updated location $LocationName";

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
