<?php

require("common.php");
if(!isset($_SESSION))
{
    session_start();
}

$payment = $_POST['payment'];
$payment = mysqli_real_escape_string($con, $payment);

$card = $_POST['card'];
$card = mysqli_real_escape_string($con, $card);

$cvv = $_POST['cvv'];
$cvv = mysqli_real_escape_string($con, $cvv);

$no_people = $_SESSION['no_people_session']; 
$no_rooms = $_SESSION['no_rooms_session']; 
$city = $_SESSION['hotel_id_session'];
$check_in = $_SESSION['check_in_session'];
$check_out = $_SESSION['check_out_session'];

$f_name = $_SESSION['f_name_session'];
$l_name = $_SESSION['l_name_session'];
$email = $_SESSION['email_session'];
$mob1 = $_SESSION['mob1_session'];
$document = $_SESSION['document_session']; 

$room_type_11 = $_SESSION['room_type_11_session'];
$room_type_21 = $_SESSION['room_type_21_session']; 
$room_type_22 = $_SESSION['room_type_22_session']; 
$room_type_31 = $_SESSION['room_type_31_session']; 
$room_type_32 = $_SESSION['room_type_32_session']; 
$room_type_33 = $_SESSION['room_type_33_session']; 

$cust_id = $_SESSION['user_id'];
$date = date("Y-m-d");
date_default_timezone_set("Asia/Calcutta");
$time = date("H:i:s");

$total = $_SESSION['total_session'];

// if($no_rooms==1) {
	// $query = "SELECT hotel_id,min(room_no) FROM rooms WHERE hotel_id ='" . $city . "' AND room_id = '" . $room_type_11 . "' AND (cust_id IS NULL OR cust_id='')";
	// $result = mysqli_query($con, $query)or die($mysqli_error($con));
	// if(empty($result)) {
	// 	echo "result is empty";
	// }
	// echo $result;
	// echo "result diplay";
	// $row = mysqli_fetch_array($result);
	// if(empty($row)) {
	// 	echo "row is empty";
	// }
	// echo $row;
	// echo "row display";
	// $room_no1 = $row['room_no'];
	// echo $room_no1;
	// echo "room no display";
// 	$query1 = "UPDATE rooms set cust_id =  '" . $cust_id . "' WHERE hotel_id ='" . $city . "' AND room_id = '" . $room_type_11 . "' AND cust_id ='' ";
// 	$result = mysqli_query($con, $query1)or die($mysqli_error($con));
// }
// elseif($no_rooms==2) {
// 	$query = "SELECT min(room_no) FROM rooms WHERE hotel_id ='" . $city . "' AND room_id = '" . $room_type_21 . "' AND (cust_id IS NULL OR cust_id='')";
// 	$result = mysqli_query($con, $query)or die($mysqli_error($con));
// 	$row = mysqli_fetch_array($result);
// 	$room_no1 = $row['room_no'];
// 	$query2 = "UPDATE rooms set cust_id =  '" . $cust_id . "' WHERE hotel_id ='" . $city . "' AND room_id = '" . $room_type_21 . "' AND cust_id ='" . $room_no1 . "'";
// 	$result = mysqli_query($con, $query2)or die($mysqli_error($con));


// 	$query1 = "SELECT min(room_no) FROM rooms WHERE hotel_id ='" . $city . "' AND room_id = '" . $room_type_22 . "' AND (cust_id IS NULL OR cust_id='')";
// 	$result = mysqli_query($con, $query1)or die($mysqli_error($con));
// 	$row = mysqli_fetch_array($result);
// 	$room_no2 = $row['room_no'];
// 	$query3 = "UPDATE rooms set cust_id =  '" . $cust_id . "' WHERE hotel_id ='" . $city . "' AND room_id = '" . $room_type_22 . "' AND cust_id ='" . $room_no2 . "'";
// 	$result = mysqli_query($con, $query3)or die($mysqli_error($con));
// }
// else{
// 	$query = "SELECT min(room_no) FROM rooms WHERE hotel_id ='" . $city . "' AND room_id = '" . $room_type_31 . "' AND (cust_id IS NULL OR cust_id='')";
// 	$result = mysqli_query($con, $query)or die($mysqli_error($con));
// 	$row = mysqli_fetch_array($result);
// 	$room_no1 = $row['room_no'];
// 	$query3 = "UPDATE rooms set cust_id =  '" . $cust_id . "' WHERE hotel_id ='" . $city . "' AND room_id = '" . $room_type_31 . "' AND cust_id ='" . $room_no1 . "'";
// 	$result = mysqli_query($con, $query3)or die($mysqli_error($con));

// 	$query1 = "SELECT min(room_no) FROM rooms WHERE hotel_id ='" . $city . "' AND room_id = '" . $room_type_32 . "' AND (cust_id IS NULL OR cust_id='')";
// 	$result = mysqli_query($con, $query1)or die($mysqli_error($con));
// 	$row = mysqli_fetch_array($result);
// 	$room_no2 = $row['room_no'];
// 	$query4 = "UPDATE rooms set cust_id =  '" . $cust_id . "' WHERE hotel_id ='" . $city . "' AND room_id = '" . $room_type_32 . "' AND cust_id ='" . $room_no2 . "'";
// 	$result = mysqli_query($con, $query4)or die($mysqli_error($con));

// 	$query2 = "SELECT min(room_no) FROM rooms WHERE hotel_id ='" . $city . "' AND room_id = '" . $room_type_33 . "' AND (cust_id IS NULL OR cust_id='')";
// 	$result = mysqli_query($con, $query2)or die($mysqli_error($con));
// 	$row = mysqli_fetch_array($result);
// 	$room_no3 = $row['room_no'];
// 	$query5 = "UPDATE rooms set cust_id =  '" . $cust_id . "' WHERE hotel_id ='" . $city . "' AND room_id = '" . $room_type_33 . "' AND cust_id ='" . $room_no3 . "'";
// 	$result = mysqli_query($con, $query5)or die($mysqli_error($con));

// }




$query6 = "INSERT INTO transaction(transaction_date,transaction_time,total_amount,check_in,check_out,no_of_people,no_rooms,payment_type,document_submitted,cust_id,hotel_id,f_name,l_name,email,mobile) VALUES('" . $date . "','" . $time . "','" . $total . "','" . $check_in . "','" . $check_out . "','" . $no_people . "','" . $no_rooms . "','" . $payment . "','" . $document . "','" . $cust_id . "','" . $city . "','" . $f_name . "','" . $l_name . "','" . $email . "','" . $mob1 . "')";
mysqli_query($con, $query6) or die(mysqli_error($con));
$trans_id = mysqli_insert_id($con);




if($no_rooms==1) {
	$query7 = "INSERT INTO books(transaction_id,room_id) VALUES('" . $trans_id . "','" . $room_type_11 . "')";
mysqli_query($con, $query7) or die(mysqli_error($con));
}
elseif($no_rooms==2) {
	$query8 = "INSERT INTO books(transaction_id,room_id) VALUES('" . $trans_id . "','" . $room_type_21 . "')";
mysqli_query($con, $query8) or die(mysqli_error($con));

$query9 = "INSERT INTO books(transaction_id,room_id) VALUES('" . $trans_id . "','" . $room_type_22 . "')";
mysqli_query($con, $query9) or die(mysqli_error($con));
}
else{
	$query10 = "INSERT INTO books(transaction_id,room_id) VALUES('" . $trans_id . "','" . $room_type_31 . "')";
mysqli_query($con, $query10) or die(mysqli_error($con));

$query11 = "INSERT INTO books(transaction_id,room_id) VALUES('" . $trans_id . "','" . $room_type_32 . "')";
mysqli_query($con, $query11) or die(mysqli_error($con));

$query12 = "INSERT INTO books(transaction_id,room_id) VALUES('" . $trans_id . "','" . $room_type_33 . "')";
mysqli_query($con, $query12) or die(mysqli_error($con));

}

header('location: success.php');
?>