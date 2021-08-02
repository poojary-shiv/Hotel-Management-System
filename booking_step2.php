<?php
require("common.php");
if(!isset($_SESSION))
{
    session_start();
}
if (!isset($_SESSION['email'])) {
    header('location: main.php');
}
// $no_rooms=$_SESSION['no_rooms_s'];
// $no_rooms_2=$_SESSION['no_rooms_session'];
// echo $no_rooms_2;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Hoteldeck | Traveller details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width" inital-scale=1>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="booking_step1.css">
  <script type="text/javascript">
    function validate()
    {
      var fname = document.getElementById("f_name").value;
      var lname = document.getElementById("l_name").value;
      var eid = document.getElementById("email").value;
      var regex_eid = /^([a-z A-Z 0-9\.-]+)@([a-z A-Z 0-9 -]).([a-z A-Z]{2,8})(.[a-z]{2,8})?$/;
      var mob = document.getElementById("mobile").value;
      var regex_mob = /^[7-9][0-9]{9}$/;
      if(fname.trim() == "" && lname.trim() == "")
      {
        alert("Please enter the values")
        return false;
      }
      else if(fname.trim() == "")
      {
        f_name.style.border = "solid 3px red";
        alert("Please enter the first name");
        return false;

      }
      else if(lname.trim() == "")
      {
        alert("Please enter the last name");
        l_name.style.border = "solid 3px red";
        return false;
      }
      else if(Boolean("") == regex_eid.test(eid))
      {
        alert("Please enter valid email-Id");
        email.style.border = "solid 3px red";
        return false;
      }
      else if(Boolean("") == regex_mob.test(mob))
      {
        alert("Please enter valid mobile number");
        mobile.style.border = "solid 3px red";
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
  <h2 style="text-align:center;color:#585858; font-weight:bolder; padding-top:15px; padding-bottom:10px;">Step 2 - Traveller Details</h2>
  <div class="container">
    <div class="jumbotron">
  <form class="needs-validation" onsubmit="return validate();" action="step2_script.php" method="POST">
    <div class="form-row">
    <div class="col-md-6 mb-3">
      <label>First name</label>
      <input style="border:1px solid #d0d0d0; height: 36px; width: 520px;" type="text" id="f_name" name="f_name">
    </div>
    <div class="col-md-6 mb-3">
      <label>Last name</label>
      <input style="border:1px solid #d0d0d0; height: 36px; width: 520px;" type="text" id="l_name" name="l_name">
    </div>
    <div class="col-md-6 mb-3">
      <label>Email</label>
      <input style="border:1px solid #d0d0d0; height: 36px; width: 520px;"  id="email" placeholder="name@example.com" name="email">
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom04">Mobile number</label><br>
      <input style="border:1px solid #d0d0d0; height: 36px; width: 520px;" type ="text"  id="mobile" name="mob1" required>
    </div>   
  </div>

  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label class="mr-sm-2">Document to be submitted:</label>
      <select class="custom-select mr-sm-2" id="document" name="document" required>
        <option selected>Select document type...</option>
        <option value="Aadhar Card">Aadhar Card</option>
        <option value="PAN Card">PAN Card</option>
        <option value="Voter ID">Voter ID</option>
        <option value="Driving License">Driving License</option>
        <option value="Passport">Passport</option>
      </select>
    </div>
  </div>

   <div class="form-group">
    
    <input type="file" class="form-control-file" id="file" name="file">
  </div>
   



  
  
  <br><br><br>
  <button style = "background-color: #606060; color: #f5f5f5; border:1px solid #303030; margin-left:450px;" class="btn btn-primary" type="submit" >Proceed >></button>
</form>
</div>

  </div>
  <script type="text/javascript">
    $("#no_rooms").on("change", function() {
    var val = $(this).val();
    $(".types").hide().find('select').val(''); // hide and empty
    if (val) $("#" + val).show();
    });

    
  </script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>