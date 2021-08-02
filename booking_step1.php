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
  <title>Hoteldeck | Select Room</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width" inital-scale=1>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="booking_step1.css">
  <script type="text/javascript">

    function check(a, b) {
  if (a >= 1 && a <= 5) {
    if (b > 4) {
      return 0;
    } else {
      return 1;
    }
  } else if (a >= 6 && a <= 8) {
    if (b > 8) {
      return 0;
    } else {
      return 1;
    }
  } else if (a == 9) {
    if (b > 12) {
      return 0;
    } else return 1;
  } else {
    if (b > 16) {
      return 0;
    } else {
      return 1;
    }
  }
}

    function validate () {
    var ad11 = Number(document.getElementById("no_of_ad11").value);
    var ad21 = Number(document.getElementById("no_of_ad21").value);
    var ad22 = Number(document.getElementById("no_of_ad22").value);
    var ad31 = Number(document.getElementById("no_of_ad31").value);
    var ad32 = Number(document.getElementById("no_of_ad32").value);
    var ad33 = Number(document.getElementById("no_of_ad33").value);

    var ch11 = Number(document.getElementById("no_of_ch11").value);
    var ch21 = Number(document.getElementById("no_of_ch21").value);
    var ch22 = Number(document.getElementById("no_of_ch22").value);
    var ch31 = Number(document.getElementById("no_of_ch31").value);
    var ch32 = Number(document.getElementById("no_of_ch32").value);
    var ch33 = Number(document.getElementById("no_of_ch33").value);

    var t11 = Number(document.getElementById("room_type_11").value);
    var t21 = Number(document.getElementById("room_type_21").value);
    var t22 = Number(document.getElementById("room_type_22").value);
    var t31 = Number(document.getElementById("room_type_31").value);
    var t32 = Number(document.getElementById("room_type_32").value);
    var t33 = Number(document.getElementById("room_type_33").value);

    var no_room = Number(document.getElementById("no_rooms").value);

    var sum11 = ad11 + ch11;
    var sum21 = ad21 + ch21;
    var sum22 = ad22 + ch22;
    var sum31 = ad31 + ch31;
    var sum32 = ad32 + ch32;
    var sum33 = ad33 + ch33;


    var flag = 0;

    var arr = [t11, t21, t22, t31, t32, t33];
    var arr2 = [sum11, sum21, sum22, sum31, sum32, sum33];

for (var i = 0; i < arr.length; i++) {
  if (check(arr[i], arr2[i])==0) {
    flag = 1;
  }
}

if (flag == 1) {
  alert("Only 4 people permitted per room.")
  return false;
} else {
  return true;
}

    
    }
    
  </script>
</head>

<body>
  <h2 style="text-align:center;color:#585858; font-weight:bolder; padding-top:15px; padding-bottom:10px;">Step 1 - Select Room</h2>
  <div class="container">
    <div class="jumbotron">
  <form class="needs-validation" onsubmit="return validate();" action="step1_script.php" method="POST">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label class="mr-sm-2">Select City</label>
      <select class="custom-select mr-sm-2" name="city" id="city">
        <option selected>City...</option>
        <option value="5">Ahmedabad</option>
        <option value="4">Kolkata</option>
        <option value="1">Managaluru</option>
        <option value="2">Mumbai</option>
        <option value="3">Pune</option>
      </select>
    </div>
  </div>

  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label>Check-in date:</label>
      <input type="date" class="form-control" name="check_in" required>
    </div>

    <div class="col-md-6 mb-3">
      <label>Check-out date:</label>
      <input type="date" class="form-control" name="check_out" required>
    </div>
  </div>

  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label class="mr-sm-2">Select number of rooms</label>
      <select class="custom-select" name="no_rooms" id="no_rooms">
        <option selected>Rooms...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>

      </select>
    </div>
  </div>

  <div class="types" id="1">
    <div class="form-row">
    <div class="col-md-6"><br>
      <p>--> Room 1</p>
      <label class="mr-sm-2">Select room type</label>
      <select class="custom-select" name="room_type_11" id="room_type_11">
        <option selected>Types...</option>
        <option value="1">Single Room...................................................................₹3000/-</option>
        <option value="6">Double Room................................................................₹5000/-</option>
        <option value="2">Twin Bedded Room....................................................₹4000/-</option>
        <option value="7">Interconnected Room...............................................₹6000/-</option>
        <option value="9">Triple Room..................................................................₹8000/-</option>
        <option value="10">Quad...............................................................................₹11000/-</option>
        <option value="3">Suite................................................................................₹7000/-</option>
        <option value="4">Royal...............................................................................₹12000/-</option>
        <option value="8">Royal Plus.....................................................................₹22000/-</option>
        <option value="5">Hoteldeck Grand.......................................................₹15000/-</option>
      </select>
    </div>    
  </div>
  
  <br>

  <div class="form-row">
    <div class="col-md-6">
      <label class="mr-sm-2">Select no. of adults (12+)</label>
      <select class="custom-select" name="no_of_ad11" id="no_of_ad11">
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
        <option value="4">Four</option>
        <option value="5">Five</option>
        <option value="6">Six</option>
        <option value="7">Seven</option>
        <option value="8">Eight</option>
        <option value="9">Nine</option>
        <option value="10">Ten</option>
        <option value="11">Eleven</option>
        <option value="12">Twelve</option>
        <option value="13">Thirteen</option>
        <option value="14">Fourteen</option>
        <option value="15">Fifteen</option>
        <option value="16">Sixteen</option>
      </select>
    </div>

    <div class="col-md-6">
      <label class="mr-sm-2">Select no. of children (below 12yrs of age)</label>
      <select class="custom-select" name="no_of_ch11" id="no_of_ch11">
        <option value="0">None</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
        <option value="4">Four</option>
        <option value="5">Five</option>
        <option value="6">Six</option>
        <option value="7">Seven</option>
        <option value="8">Eight</option>
        <option value="9">Nine</option>
        <option value="10">Ten</option>
        <option value="11">Eleven</option>
        <option value="12">Twelve</option>
        <option value="13">Thirteen</option>
        <option value="14">Fourteen</option>
        <option value="15">Fifteen</option>
      </select>
    </div>    
  </div>
  </div>
  
  <div class="types" id="2">
    <div class="form-row">
    <div class="col-md-6"><br>
      <p>--> Room 1</p>
      <label class="mr-sm-2">Select room type</label>
      <select class="custom-select" name="room_type_21" id="room_type_21">
        <option selected>Types...</option>
        <option value="1">Single Room...................................................................₹3000/-</option>
        <option value="6">Double Room................................................................₹5000/-</option>
        <option value="2">Twin Bedded Room....................................................₹4000/-</option>
        <option value="7">Interconnected Room...............................................₹6000/-</option>
        <option value="9">Triple Room..................................................................₹8000/-</option>
        <option value="10">Quad...............................................................................₹11000/-</option>
        <option value="3">Suite................................................................................₹7000/-</option>
        <option value="4">Royal...............................................................................₹12000/-</option>
        <option value="8">Royal Plus.....................................................................₹22000/-</option>
        <option value="5">Hoteldeck Grand.......................................................₹15000/-</option>
      </select>
    </div>    
  </div>
  
  <br>

  <div class="form-row">
    <div class="col-md-6">
      <label class="mr-sm-2">Select no. of adults (12+)</label>
      <select class="custom-select" name="no_of_ad21" id="no_of_ad21">
        <option value="1" selected>One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
        <option value="4">Four</option>
        <option value="5">Five</option>
        <option value="6">Six</option>
        <option value="7">Seven</option>
        <option value="8">Eight</option>
        <option value="9">Nine</option>
        <option value="10">Ten</option>
        <option value="11">Eleven</option>
        <option value="12">Twelve</option>
        <option value="13">Thirteen</option>
        <option value="14">Fourteen</option>
        <option value="15">Fifteen</option>
        <option value="16">Sixteen</option>
      </select>
    </div>

    <div class="col-md-6">
      <label class="mr-sm-2">Select no. of children (below 12yrs of age)</label>
      <select class="custom-select" name="no_of_ch21" id="no_of_ch21">
        <option value="0" selected>None</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
        <option value="4">Four</option>
        <option value="5">Five</option>
        <option value="6">Six</option>
        <option value="7">Seven</option>
        <option value="8">Eight</option>
        <option value="9">Nine</option>
        <option value="10">Ten</option>
        <option value="11">Eleven</option>
        <option value="12">Twelve</option>
        <option value="13">Thirteen</option>
        <option value="14">Fourteen</option>
        <option value="15">Fifteen</option>
      </select>
    </div>    
  </div>

  <div class="form-row">
    <div class="col-md-6"><br>
      <p>--> Room 2</p>
      <label class="mr-sm-2">Select room type</label>
      <select class="custom-select" name="room_type_22" id="room_type_22">
        <option selected>Types...</option>
        <option value="1">Single Room...................................................................₹3000/-</option>
        <option value="6">Double Room................................................................₹5000/-</option>
        <option value="2">Twin Bedded Room....................................................₹4000/-</option>
        <option value="7">Interconnected Room...............................................₹6000/-</option>
        <option value="9">Triple Room..................................................................₹8000/-</option>
        <option value="10">Quad...............................................................................₹11000/-</option>
        <option value="3">Suite................................................................................₹7000/-</option>
        <option value="4">Royal...............................................................................₹12000/-</option>
        <option value="8">Royal Plus.....................................................................₹22000/-</option>
        <option value="5">Hoteldeck Grand.......................................................₹15000/-</option>
      </select>
    </div>    
  </div>
  
  <br>

  <div class="form-row">
    <div class="col-md-6">
      <label class="mr-sm-2">Select no. of adults (12+)</label>
      <select class="custom-select" name="no_of_ad22" id="no_of_ad22">
        <option value="1" selected>One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
        <option value="4">Four</option>
        <option value="5">Five</option>
        <option value="6">Six</option>
        <option value="7">Seven</option>
        <option value="8">Eight</option>
        <option value="9">Nine</option>
        <option value="10">Ten</option>
        <option value="11">Eleven</option>
        <option value="12">Twelve</option>
        <option value="13">Thirteen</option>
        <option value="14">Fourteen</option>
        <option value="15">Fifteen</option>
        <option value="16">Sixteen</option>
      </select>
    </div>

    <div class="col-md-6">
      <label class="mr-sm-2">Select no. of children (below 12yrs of age)</label>
      <select class="custom-select" name="no_of_ch22" id="no_of_ch22">
        <option value="0" selected>None</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
        <option value="4">Four</option>
        <option value="5">Five</option>
        <option value="6">Six</option>
        <option value="7">Seven</option>
        <option value="8">Eight</option>
        <option value="9">Nine</option>
        <option value="10">Ten</option>
        <option value="11">Eleven</option>
        <option value="12">Twelve</option>
        <option value="13">Thirteen</option>
        <option value="14">Fourteen</option>
        <option value="15">Fifteen</option>
      </select>
    </div>    
  </div>
  </div>

  <div class="types" id="3">
    <div class="form-row">
    <div class="col-md-6"><br>
      <p>--> Room 1</p>
      <label class="mr-sm-2">Select room type</label>
      <select class="custom-select" name="room_type_31" id="room_type_31">
        <option selected>Types...</option>
        <option value="1">Single Room...................................................................₹3000/-</option>
        <option value="6">Double Room................................................................₹5000/-</option>
        <option value="2">Twin Bedded Room....................................................₹4000/-</option>
        <option value="7">Interconnected Room...............................................₹6000/-</option>
        <option value="9">Triple Room..................................................................₹8000/-</option>
        <option value="10">Quad...............................................................................₹11000/-</option>
        <option value="3">Suite................................................................................₹7000/-</option>
        <option value="4">Royal...............................................................................₹12000/-</option>
        <option value="8">Royal Plus.....................................................................₹22000/-</option>
        <option value="5">Hoteldeck Grand.......................................................₹15000/-</option>
      </select>
    </div>    
  </div>
  
  <br>

  <div class="form-row">
    <div class="col-md-6">
      <label class="mr-sm-2">Select no. of adults (12+)</label>
      <select class="custom-select" name="no_of_ad31" id="no_of_ad31">
        <option value="1" selected>One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
        <option value="4">Four</option>
        <option value="5">Five</option>
        <option value="6">Six</option>
        <option value="7">Seven</option>
        <option value="8">Eight</option>
        <option value="9">Nine</option>
        <option value="10">Ten</option>
        <option value="11">Eleven</option>
        <option value="12">Twelve</option>
        <option value="13">Thirteen</option>
        <option value="14">Fourteen</option>
        <option value="15">Fifteen</option>
        <option value="16">Sixteen</option>
      </select>
    </div>

    <div class="col-md-6">
      <label class="mr-sm-2">Select no. of children (below 12yrs of age)</label>
      <select class="custom-select" name="no_of_ch31" id="no_of_ch31">
        <option value="0" selected>None</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
        <option value="4">Four</option>
        <option value="5">Five</option>
        <option value="6">Six</option>
        <option value="7">Seven</option>
        <option value="8">Eight</option>
        <option value="9">Nine</option>
        <option value="10">Ten</option>
        <option value="11">Eleven</option>
        <option value="12">Twelve</option>
        <option value="13">Thirteen</option>
        <option value="14">Fourteen</option>
        <option value="15">Fifteen</option>
      </select>
    </div>    
  </div>

  <div class="form-row">
    <div class="col-md-6"><br>
      <p>--> Room 2</p>
      <label class="mr-sm-2">Select room type</label>
      <select class="custom-select" name="room_type_32" id="room_type_32">
        <option selected>Types...</option>
        <option value="1">Single Room...................................................................₹3000/-</option>
        <option value="6">Double Room................................................................₹5000/-</option>
        <option value="2">Twin Bedded Room....................................................₹4000/-</option>
        <option value="7">Interconnected Room...............................................₹6000/-</option>
        <option value="9">Triple Room..................................................................₹8000/-</option>
        <option value="10">Quad...............................................................................₹11000/-</option>
        <option value="3">Suite................................................................................₹7000/-</option>
        <option value="4">Royal...............................................................................₹12000/-</option>
        <option value="8">Royal Plus.....................................................................₹22000/-</option>
        <option value="5">Hoteldeck Grand.......................................................₹15000/-</option>
      </select>
    </div>    
  </div>
  
  <br>

  <div class="form-row">
    <div class="col-md-6">
      <label class="mr-sm-2">Select no. of adults (12+)</label>
      <select class="custom-select" name="no_of_ad32" id="no_of_ad32">
        <option value="1" selected>One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
        <option value="4">Four</option>
        <option value="5">Five</option>
        <option value="6">Six</option>
        <option value="7">Seven</option>
        <option value="8">Eight</option>
        <option value="9">Nine</option>
        <option value="10">Ten</option>
        <option value="11">Eleven</option>
        <option value="12">Twelve</option>
        <option value="13">Thirteen</option>
        <option value="14">Fourteen</option>
        <option value="15">Fifteen</option>
        <option value="16">Sixteen</option>

      </select>
    </div>

    <div class="col-md-6">
      <label class="mr-sm-2">Select no. of children (below 12yrs of age)</label>
      <select class="custom-select" name="no_of_ch32" id="no_of_ch32">
        <option value="0" selected>None</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
        <option value="4">Four</option>
        <option value="5">Five</option>
        <option value="6">Six</option>
        <option value="7">Seven</option>
        <option value="8">Eight</option>
        <option value="9">Nine</option>
        <option value="10">Ten</option>
        <option value="11">Eleven</option>
        <option value="12">Twelve</option>
        <option value="13">Thirteen</option>
        <option value="14">Fourteen</option>
        <option value="15">Fifteen</option>
      </select>
    </div>    
  </div>

  <div class="form-row">
    <div class="col-md-6"><br>
      <p>--> Room 3</p>
      <label class="mr-sm-2">Select room type</label>
      <select class="custom-select" name="room_type_33" id="room_type_33">
        <option selected>Types...</option>
        <option value="1">Single Room...................................................................₹3000/-</option>
        <option value="6">Double Room................................................................₹5000/-</option>
        <option value="2">Twin Bedded Room....................................................₹4000/-</option>
        <option value="7">Interconnected Room...............................................₹6000/-</option>
        <option value="9">Triple Room..................................................................₹8000/-</option>
        <option value="10">Quad...............................................................................₹11000/-</option>
        <option value="3">Suite................................................................................₹7000/-</option>
        <option value="4">Royal...............................................................................₹12000/-</option>
        <option value="8">Royal Plus.....................................................................₹22000/-</option>
        <option value="5">Hoteldeck Grand.......................................................₹15000/-</option>
      </select>
    </div>    
  </div>
  
  <br>

  <div class="form-row">
    <div class="col-md-6">
      <label class="mr-sm-2">Select no. of adults (12+)</label>
      <select class="custom-select" name="no_of_ad33" id="no_of_ad33">
        <option value="1" selected>One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
        <option value="4">Four</option>
        <option value="5">Five</option>
        <option value="6">Six</option>
        <option value="7">Seven</option>
        <option value="8">Eight</option>
        <option value="9">Nine</option>
        <option value="10">Ten</option>
        <option value="11">Eleven</option>
        <option value="12">Twelve</option>
        <option value="13">Thirteen</option>
        <option value="14">Fourteen</option>
        <option value="15">Fifteen</option>
        <option value="16">Sixteen</option>
      </select>
    </div>

    <div class="col-md-6">
      <label class="mr-sm-2">Select no. of children (below 12yrs of age)</label>
      <select class="custom-select" name="no_of_ch33" id="no_of_ch33">
        <option value="0" selected>None</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
        <option value="4">Four</option>
        <option value="5">Five</option>
        <option value="6">Six</option>
        <option value="7">Seven</option>
        <option value="8">Eight</option>
        <option value="9">Nine</option>
        <option value="10">Ten</option>
        <option value="11">Eleven</option>
        <option value="12">Twelve</option>
        <option value="13">Thirteen</option>
        <option value="14">Fourteen</option>
        <option value="15">Fifteen</option>
      </select>
    </div>    
  </div>
  </div>

  
  
  <br><br><br>
  <button style = "background-color: #606060; color: #f5f5f5; border:1px solid #303030; margin-left:450px;" class="btn btn-primary" type="submit" >Proceed >></button>
<?php
                                    if(isset($_GET['error']))
                                    {
                                    echo $_GET['error'];
                                    }
                                    ?>

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