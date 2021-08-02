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
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login | Hoteldeck</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet">    
    </head>

    <body>
        <br><br><br><br>
        <div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading" style = "background-color:#f5f5f5;">
                                <h4  style = " color:#303030; font-weight: bold;">LOGIN</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>Login to book a room</i><p>
                                <form action="login_script.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="e-mail" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                    </div>
                                    <button type="submit" name="submit" class="btn" style = "background-color: #606060; color: #f5f5f5;">Login</button><br><br>
                                    <?php
                                    if(isset($_GET['error']))
                                    {
                                    echo $_GET['error'];
                                    }
                                    ?>
                                </form><br/>
                            </div>
                            <div class="panel-footer"><p>Don't have an account? <a href="signup.php">Sign Up</a></p>
                            <a href="security.php">Forgot password?</a></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
</html>