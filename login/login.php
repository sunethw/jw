<?php
	ob_start();
	session_start();
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	require_once '../config/api.php';
	

	$username = mysqli_real_escape_string($conn,$username);
	$query = "SELECT uid, pwd,role,location FROM login WHERE uid = '$username';";

	$result = mysqli_query($conn,$query);

	if(mysqli_num_rows($result) == 0)
	{
		echo 'Username not found!';
		echo "\r\n";
	}
	else
	{
		$userData = mysqli_fetch_array($result, MYSQL_ASSOC);
		$code = md5($password) ;

		if($code != $userData['pwd'])
		{
			echo 'Incorrect Password!';
		}
		else
		{
			


			if ($userData['role']=='admin')
			{
				$_SESSION['loggedin'] = admin;
    	
			session_regenerate_id();
			$_SESSION['sess_username'] = $userData['role'];
			$_SESSION['sess_location'] = $userData['location'];
			session_write_close();
			header("Location: ../php/home/admin.php");
			}
			
			if ($userData['role']=='sales')
			{
				$_SESSION['loggedin'] = sales;
    	
			session_regenerate_id();
			$_SESSION['sess_username'] = $userData['role'];
			session_write_close();
			header("Location: ../php/home/sales.php");
			}

			if ($userData['role']=='manager')
			{
				$_SESSION['loggedin'] = manager;
    	
			session_regenerate_id();
			$_SESSION['sess_username'] = $userData['role'];
			session_write_close();
			header("Location: ../php/home/sales.php");
			}



			// $_SESSION['loggedin'] = true;
    	
			// session_regenerate_id();
			// $_SESSION['sess_username'] = $userData['uid'];
			// //session_write_close();
			// header("Location: ../php/home/home.php");
		}
	}
?>
<html><head><title>Sale_returned</title></head><body><br /><a href="./login.html">Back To Login</a></body></html>
