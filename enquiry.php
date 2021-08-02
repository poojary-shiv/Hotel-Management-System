<?php
require("common.php");
if(!isset($_SESSION))
{
    session_start();
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Hoteldeck | Enquiry</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width" inital-scale=1>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script type="text/javascript">
    function validate()
    {
      var fname = document.getElementById("f_name").value;
      var lname = document.getElementById("l_name").value
      var eid = document.getElementById("email").value;
      var regex_eid = /^([a-z A-Z 0-9\.-]+)@([a-z A-Z 0-9 -]).([a-z A-Z]{2,8})(.[a-z]{2,8})?$/;
      var mob = document.getElementById("mobile").value;
      var mob2 = document.getElementById("mobile2").value;
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
      else if(Boolean("") == regex_mob.test(mob))
      {
        alert("Please enter valid mobile number");
        mobile.style.border = "solid 3px red";
        return false;
      }
      else if(Boolean("") == regex_mob.test(mob2) && mob2.length!=0)
      {
        alert("Please enter valid mobile number");
        mobile2.style.border = "solid 3px red";
        return false;
      }
      else if(Boolean("") == regex_eid.test(eid))
      {
        alert("Please enter valid email-Id");
        email.style.border = "solid 3px red";
        return false;
      }
      else
      {
        return true;
      } 
    }
  </script>
</head>
<h2 style="text-align:center;color:#585858; font-weight:bolder;">Enquire now!</h2>
<body>
  <div class="container">
    <div class="jumbotron">
  <form class="needs-validation" onsubmit="return validate();" action="enquiry_script.php" method="POST" >
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
      <label for="validationCustom04">Mobile number</label><br>
      <input style="border:1px solid #d0d0d0; height: 36px; width: 520px;" type ="text"  id="mobile" name="mob1" required>
    </div>

    
    <div class="col-md-6 mb-3">
      <label for="validationCustom04">Mobile number</label><br>
      <input style="border:1px solid #d0d0d0; height: 36px; width: 520px;" type ="text"  id="mobile2" name="mob2" placeholder="optional">
    </div>

    <div class="col-md-6 mb-3">
      <label>Email</label>
      <input style="border:1px solid #d0d0d0; height: 36px; width: 520px;" type="email" id="email" placeholder="name@example.com" name="email">
    </div>
</div> <br>
<div class="form-row">
    <div class="col-md-6 mb-3">
      <label>Leave a message...</label>
      <input style="border:1px solid #d0d0d0; height: 140px; width: 1048px;" type="text"  id="message" placeholder=" Optional" name="message">
    </div>
</div>
    


  
  <br>
  <button style = "background-color: #606060; color: #f5f5f5; border:1px solid #303030;" class="btn btn-primary" type="submit" >Submit request</button>
</form>
</div>

  </div>
  
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>