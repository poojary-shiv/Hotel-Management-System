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

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);

  $dob = $_POST['dob'];
  $dob = mysqli_real_escape_string($con, $dob);

  $gender = $_POST['gender'];
  $gender = mysqli_real_escape_string($con, $gender);

  $mob1 = $_POST['mob1'];
  $mob1 = mysqli_real_escape_string($con, $mob1);

  $mob2 = $_POST['mob2'];
  $mob2 = mysqli_real_escape_string($con, $mob2);

  $pass = $_POST['pass'];
  $pass = mysqli_real_escape_string($con, $pass);

  $pass2 = $_POST['pass2'];
  $pass2 = mysqli_real_escape_string($con, $pass2);
  
  $address = $_POST['address'];
  $address = mysqli_real_escape_string($con, $address);

  $book = $_POST['book'];
  $book = mysqli_real_escape_string($con, $book);

  $colour = $_POST['colour'];
  $colour = mysqli_real_escape_string($con, $colour);

  $tourist = $_POST['tourist'];
  $tourist = mysqli_real_escape_string($con, $tourist);

  $query = "SELECT * FROM person WHERE email_id ='$email'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</span>";
    header('location: signup.php?m1=' . $m);
  } 
  else {

    $query = "INSERT INTO person(f_name,l_name,dob,gender,email_id,address) VALUES('" . $f_name . "','" . $l_name . "','" . $dob . "','" . $gender . "','" . $email . "','" . $address . "')";

    mysqli_query($con, $query) or die(mysqli_error($con));
    $person_id = mysqli_insert_id($con);

    $query1 = "INSERT INTO customer(password,book,colour,tourist,person_id) VALUES('" . $pass . "','" . $book . "','" . $colour . "','" . $tourist . "','" . $person_id . "')";
    mysqli_query($con, $query1) or die(mysqli_error($con));
    $cust_id = mysqli_insert_id($con);

    $query2 = "INSERT INTO phone_person(person_id,phone_no) VALUES('" . $person_id . "','" . $mob1 . "')";
    mysqli_query($con, $query2) or die(mysqli_error($con));

    if(!empty($mob2)) {
      $query3 = "INSERT INTO phone_person(person_id,phone_no) VALUES('" . $person_id . "','" . $mob2 . "')";
      mysqli_query($con, $query3) or die(mysqli_error($con));

    }

    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $cust_id;
    header('location: success.php');
  }
?>