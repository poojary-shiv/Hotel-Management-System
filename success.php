<?php
require("common.php");
if(!isset($_SESSION))
{
    session_start();
}
if (!isset($_SESSION['email'])) {
    header('location: main.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<html>

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  	<link rel="stylesheet" href="success_styles.css">
	<title>Hoteldeck | Success</title>
	<script src="https://kit.fontawesome.com/02152139eb.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
		  <div class="shadowbox">
            <center>
            	<i class=" self-thumbs-up fa fa-thumbs-up" aria-hidden="true"></i>
            	<h2>Success..!!</h2>
            </center>
          </div>
          <a href="main.php"><h6>Back to home page</h6></a>
          <!-- <a href="main.php" styles="color:#303030;
  text-align:center;"><h6>Back to home page</h6></a> -->
</body>
</html>