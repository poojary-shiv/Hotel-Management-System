<?php

require("common.php");
if(!isset($_SESSION))
{
    session_start();
}

$cust_id=$_SESSION['user_id'];

$query = "update customer set type = 2 where cust_id='" . $cust_id . "'";
mysqli_query($con, $query) or die(mysqli_error($con));






header('location: success.php');


?>