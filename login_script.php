<?php

require("common.php");
if(!isset($_SESSION))
{
    session_start();
}
$email = $_POST['e-mail'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);
//$password = password($password);
// Query checks if the email and password are present in the database.
//$query = "SELECT cust_id, email_id FROM person WHERE email_id='" . $email . "' AND password='" . $password . "'";
$query = "SELECT person_id, email_id FROM person WHERE email_id='" . $email . "' AND person_id IN (SELECT person_id from customer WHERE password='" . $password . "')";

$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.

$query1 = "SELECT cust_id, password FROM customer WHERE person_id IN (SELECT person_id from person WHERE email_id='" . $email . "')";

$result1 = mysqli_query($con, $query1)or die($mysqli_error($con));

if ($num == 0) {
  $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
  header('location: login.php?error=' . $error);
} else {  
  $row = mysqli_fetch_array($result);
  $row1 = mysqli_fetch_array($result1);
  $_SESSION['email'] = $row['email_id'];
  $_SESSION['user_id'] = $row1['cust_id'];
  header('location: main.php');
}

?>