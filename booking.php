<?php
include 'common.php';
if(!isset($_SESSION))
{
    session_start();
}
if (!isset($_SESSION['email']))
{
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Hoteldeck | Booking</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width" inital-scale=1>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="booking.css">
</head>

<body>
	<h2>Complete your booking in just three simple steps!</h2>
  <div class="container self-container">
    <div class="jumbotron self-jumbotron">
    	<form action="booking_step1.php" method="POST">
    	<h4>Step 1 - Select Room</h4>
    	<ul>
    		<li>Select the city along with check-in check-out dates.</li>
    		<li>Select the required number of rooms and number of persons per room.</li>
    	</ul>
    	<hr>
    	<h4>Step 2 - Traveller details</h4>
    	<ul>
    		<li>Enter traveller details like name, email ID, phone number.</li>
    		<li>Apply for coupons, if any.</li>
    		<li>Confirm booking.</li>
    	</ul>
    	<hr>
    	<h4>Step 3 - Make Payment</h4>
    	<ul>
    		<li>Choose any convenient mode of payment.</li>
    		<li>Enter the credentials and cofirm payment.</li>
    		<li>You are done with your booking!</li>
    	</ul>
    		
	<br>  
		<button style = "background-color: #606060; color: #f5f5f5; border:1px solid #303030; margin-left:190px;" class="btn btn-primary proceed-button" type="submit" >Proceed >></button>
</form>
</div>

  </div>
  
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>