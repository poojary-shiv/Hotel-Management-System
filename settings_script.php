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

$old_pass = $_POST['old-password'];
$old_pass = mysqli_real_escape_string($con, $old_pass);
//$old_pass = MD5($old_pass);

$new_pass = $_POST['password'];
$new_pass = mysqli_real_escape_string($con, $new_pass);
//$new_pass = MD5($new_pass);

$new_pass1 = $_POST['password1'];
$new_pass1 = mysqli_real_escape_string($con, $new_pass1);
//$new_pass1 = MD5($new_pass1);

$query = "SELECT cust_id,password from customer where person_id in (select person_id from person where email_id = '" . $_SESSION['email'] . "')";

$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$orig_pass = $row['password'];
$cust_id = $row['cust_id'];

if ($new_pass != $new_pass1) {
    header('location: settings.php?error=The entered passwords don\'t match');
} else {
    if ($old_pass == $orig_pass) {
        $query = "UPDATE  customer SET password = '" . $new_pass . "' WHERE cust_id = '" . $cust_id . "'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        header('location: settings.php?error=Password Updated');
    } else{
        header('location: settings.php?error=Wrong Old Password');
}
}