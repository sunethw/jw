
<?php
require_once '../config/api.php';
mysqli_query($conn,"DELETE FROM locations WHERE locationCode='" . $_GET['locationCode'] . "'");
header("Location:add_locations.php");
?>