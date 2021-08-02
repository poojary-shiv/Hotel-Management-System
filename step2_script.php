<?php

require("common.php");
if(!isset($_SESSION))
{
    session_start();
}

$f_name = $_POST['f_name'];
$f_name = mysqli_real_escape_string($con, $f_name);

$l_name = $_POST['l_name'];
$l_name = mysqli_real_escape_string($con, $l_name);

$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);

$mob1 = (int)$_POST['mob1'];


$document = $_POST['document'];
$document = mysqli_real_escape_string($con, $document);



$room_type_11 = $_SESSION['room_type_11_session'];
$room_type_21 = $_SESSION['room_type_21_session']; 
$room_type_22 = $_SESSION['room_type_22_session']; 
$room_type_31 = $_SESSION['room_type_31_session']; 
$room_type_32 = $_SESSION['room_type_32_session']; 
$room_type_33 = $_SESSION['room_type_33_session'];

$no_rooms = $_SESSION['no_rooms_session']; 
$total = 0;

$check_in = $_SESSION['check_in_session']; 
$check_out = $_SESSION['check_out_session'];

$date1=date_create($check_in);
$date2=date_create($check_out);

$diff=date_diff($date1,$date2);
$no_days = (int)$diff->format("%a");

if($no_rooms==1) {
	$query = "SELECT pricing FROM room_type WHERE room_id ='" . $room_type_11 . "'";
	$result = mysqli_query($con, $query)or die($mysqli_error($con));
	$row = mysqli_fetch_array($result);
	$price1 = $row['pricing'];
	$total = $total + ($price1*$no_days);
}
elseif($no_rooms==2) {
	$query1 = "SELECT pricing FROM room_type WHERE room_id ='" . $room_type_21 . "'";
	$result = mysqli_query($con, $query1)or die($mysqli_error($con));
	$row = mysqli_fetch_array($result);
	$price1 = $row['pricing'];
	$total = $total +($price1*$no_days);


	$query2 = "SELECT pricing FROM room_type WHERE room_id ='" . $room_type_22 . "'";
	$result = mysqli_query($con, $query2)or die($mysqli_error($con));
	$row = mysqli_fetch_array($result);
	$price2 = $row['pricing'];
	$total = $total +($price2*$no_days);
}
else{
	$query3 = "SELECT pricing FROM room_type WHERE room_id ='" . $room_type_31 . "'";
	$result = mysqli_query($con, $query3)or die($mysqli_error($con));
	$row = mysqli_fetch_array($result);
	$price1 = $row['pricing'];
	$total = $total + ($price1*$no_days);

	$query4 = "SELECT pricing FROM room_type WHERE room_id ='" . $room_type_32 . "'";
	$result = mysqli_query($con, $query4)or die($mysqli_error($con));
	$row = mysqli_fetch_array($result);
	$price2 = $row['pricing'];
	$total = $total + ($price2*$no_days);

	$query5 = "SELECT pricing FROM room_type WHERE room_id ='" . $room_type_33 . "'";
	$result = mysqli_query($con, $query5)or die($mysqli_error($con));
	$row = mysqli_fetch_array($result);
	$price3 = $row['pricing'];
	$total = $total + ($price3*$no_days);

} 

$_SESSION['f_name_session'] = $f_name;
$_SESSION['l_name_session'] = $l_name;
$_SESSION['email_session'] = $email;
$_SESSION['mob1_session'] = $mob1;
$_SESSION['document_session'] = $document;

$cust_id=$_SESSION['user_id'];

$query1 = "SELECT type FROM customer WHERE cust_id='" . $cust_id . "'";

$result1 = mysqli_query($con, $query1)or die($mysqli_error($con));
$row1 = mysqli_fetch_array($result1);
$type = $row1['type'];
if($type==1) {
$total=$total-($total*0.02);
}
if($type==2) {
	$total=$total-($total*0.25);

}
if($type==2) {
	$total=$total-($total*0.30);

}
$_SESSION['total_session'] = $total;


// $_SESSI0N['file'] = $file;
header('location: booking_step3.php');
?>