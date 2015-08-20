<?php
require_once 'dbconf.php';

function insert($conn,$query) {

$result = mysqli_query($conn,$query);

}
?>