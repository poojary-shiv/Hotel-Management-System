<?php
require("common.php");
if(!isset($_SESSION))
{
    session_start();
}
if (!isset($_SESSION['email'])) {
    header('location: main.php');
}

$transaction_id = (int)$_POST['transaction_id'];

$query = "SELECT * FROM transaction WHERE transaction_id ='" . $transaction_id . "'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);

  
  if ($num == 0) {
    $m = "<span class='red'>The entered transaction-ID doesn't exist in our database.</span>";
    header('location: cancellation.php?m1=' . $m);
  } 

else {

  $query = "DELETE FROM transaction WHERE transaction_id ='" . $transaction_id . "'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  
  header('location: success.php');
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