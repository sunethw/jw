
<?php
require_once '../config/api.php';
mysqli_query($conn,"DELETE FROM login WHERE userId='" . $_GET['userId'] . "'");
header("Location:add_users.php");
?>