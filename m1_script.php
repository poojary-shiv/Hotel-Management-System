<?php

require("common.php");
if(!isset($_SESSION))
{
    session_start();
}
if (!isset($_SESSION['email'])) {
    header('location: login.php');
}

$cust_id=$_SESSION['user_id'];

$query = "update customer set type = 1 where cust_id='" . $cust_id . "'";
mysqli_query($con, $query) or die(mysqli_error($con));






header('location: success.php');


?>