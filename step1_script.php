<?php

require("common.php");
if(!isset($_SESSION))
{
    session_start();
}

$city = (int)$_POST['city'];

$check_in = $_POST['check_in'];
$check_in = mysqli_real_escape_string($con, $check_in);

$check_out = $_POST['check_out'];
$check_out = mysqli_real_escape_string($con, $check_out);


$no_rooms = (int)$_POST['no_rooms'];
// $_POST['no_rooms_1']=$no_rooms;

// $query12 = "INSERT INTO transaction(no_rooms) VALUES('" . $no_rooms . "')";
// mysqli_query($con, $query12) or die(mysqli_error($con));

if($no_rooms == 1) {
$room_type_11 = (int)$_POST['room_type_11'];


$room_type_21=0;
$room_type_22=0;
$room_type_31=0;
$room_type_32=0;
$room_type_33=0;



$no_of_ch11 = $_POST['no_of_ch11'];

$no_of_ad11 = $_POST['no_of_ad11'];


$no_people = (int)$no_of_ad11+
			 (int)$no_of_ch11;

}
elseif($no_rooms == 2) {
$room_type_21 = (int)$_POST['room_type_21'];
$room_type_21 = mysqli_real_escape_string($con, $room_type_21);

$room_type_22 = (int)$_POST['room_type_22'];
$room_type_22 = mysqli_real_escape_string($con, $room_type_22);

$room_type_11=0;

$room_type_31=0;
$room_type_32=0;
$room_type_33=0;

$no_of_ch21 = $_POST['no_of_ch21'];


$no_of_ch22 = $_POST['no_of_ch22'];



$no_of_ad21 = $_POST['no_of_ad21'];


$no_of_ad22 = $_POST['no_of_ad22'];


$no_people = (int)$no_of_ad21+(int)$no_of_ad22+
			 (int)$no_of_ch21+(int)$no_of_ch22;

}
else {
$room_type_31 = (int)$_POST['room_type_31'];


$room_type_32 = (int)$_POST['room_type_32'];


$room_type_33 = (int)$_POST['room_type_33'];

$room_type_21=0;
$room_type_22=0;
$room_type_11=0;


$no_of_ch31 = $_POST['no_of_ch31'];


$no_of_ch32 = $_POST['no_of_ch32'];

$no_of_ch33 = $_POST['no_of_ch33'];


$no_of_ad31 = $_POST['no_of_ad31'];


$no_of_ad32 = $_POST['no_of_ad32'];

$no_of_ad33 = $_POST['no_of_ad33'];

$no_people = (int)$no_of_ad31+(int)$no_of_ad32+(int)$no_of_ad33+(int)$no_of_ch31+(int)$no_of_ch32+(int)$no_of_ch33;


}


$_SESSION['no_people_session'] = $no_people;
$_SESSION['no_rooms_session'] = $no_rooms;


$_SESSION['hotel_id_session'] = $city;
$_SESSION['check_in_session'] = $check_in;
$_SESSION['check_out_session'] = $check_out;


$_SESSION['room_type_11_session'] = $room_type_11;
$_SESSION['room_type_21_session'] = $room_type_21;
$_SESSION['room_type_22_session'] = $room_type_22;
$_SESSION['room_type_31_session'] = $room_type_31;
$_SESSION['room_type_32_session'] = $room_type_32;
$_SESSION['room_type_33_session'] = $room_type_33;



// $query = "SELECT room_no FROM rooms WHERE hotel_id ='" . $city . "' AND room_id = '" . $room_type_11 . "' AND (cust_id IS NULL OR cust_id='')";
// 	$result = mysqli_query($con, $query)or die($mysqli_error($con));
// 	$num = mysqli_num_rows($result);
// 	if ($num == 0) {
		
//   	$error = "<span class='red'>The room type of choice is full...please try with different room type.</span>";
//   	header('location: booking_step1.php?error=' . $error);

// }

// header('location: booking_step2.php?no_p=" . $no_people . "&no_r=" . $no_rooms . "&hotel_id=" . $city . "&c_in=" . $check_in . "&c_out=" . $check_out . "&r_11=" . $room_type_11 . "&r_21=" . $room_type_21 . "&r_22=" . $room_type_22 . "&r_31=" . $room_type_31 . "&r_32=" . $room_type_32 . "&r_33=" . $room_type_33 . "');
// else {
// 	header('location: booking_step2.php');
// }
header('location: booking_step2.php');


?>