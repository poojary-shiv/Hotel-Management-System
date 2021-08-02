<?php

// This page updates the user password
require("common.php");
if(!isset($_SESSION))
{
    session_start();
}
if (!isset($_SESSION['email'])) {
    header('location: main.php');
}


$new_pass1 = $_POST['pass'];
$new_pass1 = mysqli_real_escape_string($con, $new_pass1);
//$new_pass = MD5($new_pass);

$new_pass2 = $_POST['pass2'];
$new_pass2 = mysqli_real_escape_string($con, $new_pass2);
//$new_pass1 = MD5($new_pass1);

$query = "SELECT cust_id,password from customer where person_id in (select person_id from person where email_id = '" . $_SESSION['email'] . "')";


$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);

$cust_id = $row['cust_id'];

 
    
$query = "UPDATE  customer SET password = '" . $new_pass1 . "' WHERE cust_id = '" . $cust_id . "'";
mysqli_query($con, $query) or die($mysqli_error($con));
header('location: success.php');
    