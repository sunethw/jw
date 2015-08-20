



<?php
require_once '../config/api.php'; //db connection creation
$sql = "select * from staff_details;";
	$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result) == 0)
	{
		echo 'No Item Found!';
	}
	else
	{
		echo "<table border='1'>
		<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Phone</th>
		<th>Address</th>
		<th>Salary</th>
		<th>Department</th>
		</tr>";

		while($row = mysqli_fetch_array($result, MYSQL_ASSOC))
		{
			echo "<tr>";
			echo "<td>" . $row['id'] . "</td>";
			echo "<td>" . $row['Name'] . "</td>";
			echo "<td>" . $row['Phone'] . "</td>";
			echo "<td>" . $row['Address'] . "</td>";
			echo "<td>" . $row['Salary']. "</td>";
			echo "<td>" . $row['Department']. "</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	//mysqli_close($conn);
?> 	