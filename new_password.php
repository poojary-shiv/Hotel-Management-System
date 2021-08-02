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
<html>
<head>
  <title>Hoteldeck | New Password</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width" inital-scale=1>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="booking_step1.css">
  <script type="text/javascript">
    function validate()
    {
      var pw = document.getElementById("pass").value;
      var pw2 = document.getElementById("pass2").value;
      

      if(pw.trim() == "" || pw.length<8 || pw.length>15)
      {
        if(pw.trim() == "")
        {
          alert("Please enter the password");
        }
        else if(pw.length<8)
        {
          alert("Password must be of atleast 8 characters")
        }
        else
        {
          alert("Password is exceeding the maximum limit of 15 characters")
        }
        pass.style.border = "solid 3px red";
        return false;
      }
      else if(pw != pw2)
      {
        alert("Entered passwords don't match");
        return false;
      }
      
      else
      {
        return true;
      } 
    }
    
    
  </script>
</head>

<body>
  <h2 style="text-align:center;color:#585858; font-weight:bolder; padding-top:15px; padding-bottom:10px;">New Password</h2>
  <div class="container" style="width:600px;">
    <div class="jumbotron">
  <form class="needs-validation" onsubmit="return validate();" action="new_password_script.php" method="POST">
  	<div  class="form-row">
  		<div class="col-md-6 mb-3" style="margin-left:15px; margin-bottom:20px;">
      <label>Enter new password:</label><br> 
      <input style="border:1px solid #d0d0d0; height: 36px; width: 400px;" id="pass" type="password" name="pass"> 
    </div>
    <div class="col-md-6 mb-3" style="margin-left:15px; margin-bottom:20px;">
      <label>Re-enter new password:</label><br> 
      <input style="border:1px solid #d0d0d0; height: 36px; width: 400px;" id="pass2" type="password" name="pass2"> 
    </div>
  	</div>
    
  <br><br><br>
  <button style = "background-color: #606060; color: #f5f5f5; border:1px solid #303030; margin-left:190px;" class="btn btn-primary" type="submit">Submit</button>
</form>
</div>

  </div>
  
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>