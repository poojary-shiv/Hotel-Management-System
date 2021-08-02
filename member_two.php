<?php
require("common.php");
if(!isset($_SESSION))
{
    session_start();
}
if (!isset($_SESSION['email'])) {
    header('location: login.php');
}
$total_amt=8000;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Hoteldeck | Membership</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width" inital-scale=1>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="booking_step1.css">
  <script type="text/javascript">
    function validate()
    {
      var card_no = document.getElementById("card").value;
      var cvv_code = document.getElementById("cvv").value;
      var regex = /^[0-9]+$/;

      if(card_no.trim() == "" && cvv_code.trim() == "")
      {
        alert("Please enter the credentials")
        return false;
      }
      else if(card_no.trim() == "")
      {
        card.style.border = "solid 3px red";
        alert("Please enter the card number");
        return false;

      }
      else if(cvv_code.trim() == "")
      {
        cvv.style.border = "solid 3px red";
        alert("Please enter the CVV");
        
        return false;
      }
      else if(Boolean("") == regex.test(card_no) || card_no.length!=16) {
        alert("Please enter valid card number (16-digit)");
        card.style.border = "solid 3px red";
        return false;
      }
      else if(Boolean("") == regex.test(cvv_code) || (cvv_code.length<3 && cvv_code.length>4)) {
        alert("Please enter valid CVV code (3-digit or 4-digit code)");
        cvv.style.border = "solid 3px red";
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
  <h2 style="text-align:center;color:#585858; font-weight:bolder; padding-top:15px; padding-bottom:10px;">Payment</h2>
  <div class="container" style="width:600px;">
    <div class="jumbotron">
  <form class="needs-validation" onsubmit="return validate();" action="m2_script.php" method="POST">
    <div class="form-row" style="margin-left:12px;">
    <div class="col-md-6 mb-3">
      <h4><?php echo "Pay ₹" .$total_amt ?></h4> <br>
      <h5>Select paymet mode:</h5>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="payment" id="debit" value="Debit Card" checked>
        <label class="form-check-label">
          Debit Card
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="payment" id="credit" value="Credit Card">
        <label class="form-check-label">
          Credit Card
        </label>
      </div> 
      
</div>
</div>
<br>
 <div class="col-md-6 mb-3">
      <label for="validationCustom04">Enter card number:</label><br>
      <input style="border:1px solid #d0d0d0; height: 36px; width: 480px;" type ="text"  id="card" name="card">
      </div>

<div class="col-md-6 mb-3">
      <label for="validationCustom04">Enter CVV:</label><br>
      <input style="border:1px solid #d0d0d0; height: 36px; width: 150px;" type ="text"  id="cvv" name="cvv">
      </div>
  
  
  <br><br><br>
  <button style = "background-color: #606060; color: #f5f5f5; border:1px solid #303030; margin-left:190px;" class="btn btn-primary" type="submit">Confirm Payment</button>
</form>
</div>

  </div>
  
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>