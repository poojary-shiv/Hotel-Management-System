<?php

require("common.php");
if(!isset($_SESSION))
{
    session_start();
}

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  $f_name = $_POST['f_name'];
  $f_name = mysqli_real_escape_string($con, $f_name);

  $l_name = $_POST['l_name'];
  $l_name = mysqli_real_escape_string($con, $l_name);

  $mob1 = $_POST['mob1'];
  $mob1 = mysqli_real_escape_string($con, $mob1);

  $mob2 = $_POST['mob2'];
  $mob2 = mysqli_real_escape_string($con, $mob2);

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);
  
  $message = $_POST['message'];
  $message = mysqli_real_escape_string($con, $message);

  $staff_id=rand(1,10);

    $query = "INSERT INTO enquiry(f_name,l_name,email_id,staff_id,message) VALUES('" . $f_name . "','" . $l_name . "','" . $email . "','" . $staff_id . "','" . $message . "')";

    mysqli_query($con, $query) or die(mysqli_error($con));
    $enquiry_id = mysqli_insert_id($con);

    $query2 = "INSERT INTO enquiry_phone(req_id,phone_no) VALUES('" . $enquiry_id . "','" . $mob1 . "')";
    mysqli_query($con, $query2) or die(mysqli_error($con));

    if(!empty($mob2)) {
      $query3 = "INSERT INTO enquiry_phone(req_id,phone_no) VALUES('" . $enquiry_id . "','" . $mob2 . "')";
      mysqli_query($con, $query3) or die(mysqli_error($con));

   }

    header('location: success_enq.php');
 
?>