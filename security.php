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
  <title>Hoteldeck | Authentication</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width" inital-scale=1>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="booking_step1.css">
  <script type="text/javascript">
    function validate()
    {
      var eid = document.getElementById("email").value;
      var book_var = document.getElementById("book").value;
      var colour_var = document.getElementById("colour").value;
      var tourist_var = document.getElementById("tourist").value;
      var regex_eid = /^([a-z A-Z 0-9\.-]+)@([a-z A-Z 0-9 -]).([a-z A-Z]{2,8})(.[a-z]{2,8})?$/;

      if(book_var.trim() == "") {
      	book.style.border = "solid 3px red";
        alert("Please enter the name of your favourite book.")
        return false;
      }
      else if(colour_var.trim() == "")
      {
        colour.style.border = "solid 3px red";
        alert("Please enter the name of your favourite colour.");
        return false;

      }
      else if(tourist_var.trim() == "")
      {
        tourist.style.border = "solid 3px red";
        alert("Please enter the name of your favourite tourist destination place.");
        
        return false;
      }
      else if(eid.trim() == "")
      {
        email.style.border = "solid 3px red";
        alert("Please enter your email-ID.");
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

<body>
  <h2 style="text-align:center;color:#585858; font-weight:bolder; padding-top:15px; padding-bottom:10px;">Authentication</h2>
  <div class="container" style="width:600px;">
    <div class="jumbotron">
  <form class="needs-validation" onsubmit="return validate();" action="security_script.php" method="POST">
  	<div  class="form-row">
  		<div class="col-md-6 mb-3" style="margin-left:15px; margin-bottom:20px;">
      <label>Enter your email-ID:</label>
      <input style="border:1px solid #d0d0d0; height: 36px; width: 400px;" type="email" id="email" placeholder="name@example.com" name="email">
    </div>
  	</div>
    <div class="form-row" style="margin-top:20px; margin-left:15px; margin-bottom:10px;">
  <label>Please answer the following security questions, for us to verify it's you.</label>  
</div>
<?php
                                    if (isset($_GET['m1']))
                                    {
                                        echo $_GET['m1'];
                                        
                                    }
                                    ?>
<div>
  <div class="col-md-6 mb-3">
      <label style="width:300px;">What is the name of our favourite book?</label>
      <input style="border:1px solid #d0d0d0; height: 36px; width: 400px;" type="text" id="book" name="book">
    </div>

    <div class="col-md-6 mb-3">
      <label>Which is your favourite colour?</label>
      <input style="border:1px solid #d0d0d0; height: 36px; width: 400px;" type="text" id="colour" name="colour">
    </div>

    <div class="col-md-6 mb-3">
      <label style="width:400px;">Which is your favourite tourist destination place?</label>
      <input style="border:1px solid #d0d0d0; height: 36px; width: 400px;" type="text" id="tourist" name="tourist">
    </div>

</div>
<?php
                                    if (isset($_GET['m2']))
                                    {
                                        echo $_GET['m2'];
                                        
                                    }
                                    ?>
  <br><br><br>
  <button style = "background-color: #606060; color: #f5f5f5; border:1px solid #303030; margin-left:190px;" class="btn btn-primary" type="submit">Authenticate</button>
</form>
</div>

  </div>
  
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>