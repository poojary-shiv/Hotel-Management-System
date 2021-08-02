<?php
require("common.php");
if(!isset($_SESSION))
{
    session_start();
}
if (isset($_SESSION['email'])) {
    header('location: main.php');
}

$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);

$query = "SELECT * FROM person WHERE email_id ='$email'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  if ($num == 0) {
    $m = "<span class='red'>The entered email-ID doesn't exist in our database.</span>";
    header('location: security.php?m1=' . $m);
  } 

$book = $_POST['book'];
$book = mysqli_real_escape_string($con, $book);

$colour = $_POST['colour'];
$colour = mysqli_real_escape_string($con, $colour);

$tourist = $_POST['tourist'];
$tourist = mysqli_real_escape_string($con, $tourist);


$query = "SELECT cust_id,book,colour,tourist from customer where person_id in (select person_id from person where email_id = '" . $email . "')";

$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$cust_id = $row['cust_id'];
$book_1 = $row['book'];
$colour_1 = $row['colour'];
$tourist_1 = $row['tourist'];

if($book == $book_1 && $colour == $colour_1 && $tourist == $tourist_1) {
	$_SESSION['email']=$email;
	header('location: new_password.php');

}
else {
	$m = "<span class='red'>The entered responses are incorrect. Please try again.</span>";
    header('location: security.php?m2=' . $m);
}
// if ($new_pass != $new_pass1) {
//     header('location: settings.php?error=The entered passwords don\'t match');
// } else {
//     if ($old_pass == $orig_pass) {
//         $query = "UPDATE  customer SET password = '" . $new_pass . "' WHERE cust_id = '" . $cust_id . "'";
//         mysqli_query($con, $query) or die($mysqli_error($con));
//         header('location: settings.php?error=Password Updated');
//     } else{
//         header('location: settings.php?error=Wrong Old Password');
// }
// }
?>