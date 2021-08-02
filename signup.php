<?php
require("common.php");
if(!isset($_SESSION))
{
    session_start();
}
if (isset($_SESSION['email'])) {
    header('location: main.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Hoteldeck | SignUp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width" inital-scale=1>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script type="text/javascript">
    function validate()
    {
      var fname = document.getElementById("f_name").value;
      var lname = document.getElementById("l_name").value;
      var pw = document.getElementById("pass").value;
      var pw2 = document.getElementById("pass2").value;
      var eid = document.getElementById("email").value;
      var regex_eid = /^([a-z A-Z 0-9\.-]+)@([a-z A-Z 0-9 -]).([a-z A-Z]{2,8})(.[a-z]{2,8})?$/;
      var mob = document.getElementById("mobile").value;
      var mob2 = document.getElementById("mobile2").value;
      var regex_mob = /^[7-9][0-9]{9}$/;
      var book_var = document.getElementById("book").value;
      var colour_var = document.getElementById("colour").value;
      var tourist_var = document.getElementById("tourist").value;
      if(fname.trim() == "" || lname.trim() == "" || book_var.trim() == "" || colour_var.trim() == "" || tourist_var.trim() == "")
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
      else if(Boolean("") == regex_mob.test(mob2) && mob2.length!=0)
      {
        alert("Please enter valid mobile number");
        mobile2.style.border = "solid 3px red";
        return false;
      }
      else if(pw.trim() == "" || pw.length<8 || pw.length>15)
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
  <h2 style="text-align:center;color:#585858; font-weight:bolder;">Sign Up</h2>
  <div class="container">
    <div class="jumbotron">
  <form class="needs-validation" onsubmit="return validate();" action="signup_script.php" method="POST" >
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
      <input style="border:1px solid #d0d0d0; height: 36px; width: 520px;" type="email" id="email" placeholder="name@example.com" name="email">
    </div>
    <?php
                                    if (isset($_GET['m1']))
                                    {
                                        echo $_GET['m1'];
                                        
                                    }
                                    ?>

    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Date of Birth</label>
      <input type="date" class="form-control" id="validationCustom02" name="dob" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <label class="col-md-12">Gender:</label>
    <div class="form-check form-check-inline col-md-6 mb-3">
      <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
      <label class="form-check-label" for="inlineRadio1">Male</label>
    </div>
    <div class="form-check form-check-inline col-md-6 mb-3">
      <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
      <label class="form-check-label" for="inlineRadio2">Female</label>
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
      <label>Password</label><br> 
      <input style="border:1px solid #d0d0d0; height: 36px; width: 520px;" id="pass" type="password" name="pass"> 
    </div>

    <div class="col-md-6 mb-3"> 
      <label>Re-enter the password</label><br> 
      <input style="border:1px solid #d0d0d0; height: 36px; width: 520px;" id="pass2" type="password" name="pass2">
    </div>

    <div class="col-md-6 mb-3">
      <label >Address</label>
      <input style="border:1px solid #d0d0d0; height: 70px; width: 1048px;" type="text"  id="address" placeholder=" optional" name="address">
    </div>
</div>  
<div class="form-row" style="margin-top:20px; margin-left:14px;">
  <label>Security questions:</label>  
</div>

<div>
  <div class="col-md-6 mb-3">
      <label>What is the name of our favourite book?</label>
      <input style="border:1px solid #d0d0d0; height: 36px; width: 520px;" type="text" id="book" name="book">
    </div>

    <div class="col-md-6 mb-3">
      <label>Which is your favourite colour?</label>
      <input style="border:1px solid #d0d0d0; height: 36px; width: 520px;" type="text" id="colour" name="colour">
    </div>

    <div class="col-md-6 mb-3">
      <label>Which is your favourite tourist destination place?</label>
      <input style="border:1px solid #d0d0d0; height: 36px; width: 520px;" type="text" id="tourist" name="tourist">
    </div>
</div>
    


  
  <br><br><br>
  <button style = "background-color: #606060; color: #f5f5f5; border:1px solid #303030;" class="btn btn-primary" type="submit" >Submit form</button>
</form>
</div>

  </div>
  
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>