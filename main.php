<?php
require("common.php");
if(!isset($_SESSION))
{
    session_start();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <!-- font awesome  -->

  <script src="https://kit.fontawesome.com/02152139eb.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  <title >Hoteldeck</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark self-navbar ">
    <a class="navbar-brand self-navbar-brand" href="#"><i class="fas fa-home self-hotel-symbol"></i>Hoteldeck</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto self-navbar-options">

        <li class="nav-item self-nav-item">
          <a class="nav-link" href="aboutus/aboutus.php">About Us</a>
        </li>
        <li class="nav-item self-nav-item">
          <a class="nav-link" href="gallery/gallery.php">Gallery</a>
        </li>

      	<?php
                if (isset($_SESSION['email'])) 
                { 
                    ?>    
        
        <li class="nav-item self-nav-item">
          <a class="nav-link" href="settings.php">Settings</a>
        </li>
        <li class="nav-item self-nav-item">
          <a class="nav-link" href="logout_script.php">Logout</a>
        </li>

        <?php 
                    
                }
                else 
                {
                    ?>

        
        <li class="nav-item self-nav-item">
          <a class="nav-link" href="login.php">Login/SignUp</a>
        </li>
        <li class="nav-item self-nav-item">
          <a class="nav-link" href="enquiry.php">Contact Us</a>
        </li>
        <?php
                }
                    ?>

      </ul>

    </div>
  </nav>

  <div id="content">
    <!--Main banner image-->
    <div id="banner_image">
      <div class="container">
        <center>
          <div id="banner_content">
            <h2>Experience the passion of hospitality.</h2>
            <p>Book now to avail flat 20% discount </p>
            <br />
            <a href="booking.php" class="btn btn-danger btn-lg active">Book now</a>
          </div>
        </center>
      </div>
    </div>
    <!--Main banner image end-->
  </div>
  <hr>
  <!-- Features -->

  <section id="features">
    <div class="row">
      <div class="feature-box col-lg-4">
        <div class="ring-class">
          <img class="feature-image1 " src="images/hms_food.jpg" alt="">
        </div>

        <h3>Appetizing Meals</h3>
        <p>Enjoy the varied dishes from Indian cuisine prepared by the top chefs in India. Get your meals customized as per your needs. We serve you mouth savouring food 24x7 by taking utmost care of the quallity of the food being prepared.</p>
      </div>
      <div class="feature-box col-lg-4">

        <div class="ring-class">
          <img class="feature-image1 " src="images/hms_furniture.jpg" alt="">
        </div>

        <h3>Elegant Interior Designs</h3>
        <p>By providing high-end, discernible furnitures we make sure that our cusomers have a memorable and best living experience at Hoteldeck. Get access to amenities like high speed Wi-Fi connection, conference rooms, doctor on call, kitchentte, caretaker, sport games, live music, bornfire and much more!!....  </p>
      </div>
      <div class="feature-box col-lg-4">
        <div class="ring-class">
          <<img class="feature-image1 " src="images/hms_pool.jpg" alt="">
        </div>

        <h3>Splendid Pools</h3>
        <p>If you are looking to make a splash on your next vacation, we have rounded up the most exquisite pools for you. With gorgeous designs and indulgent features, these luxurious pools take an afternoon swim to another level.</p>
      </div>
    </div>
  </section>

  <hr id="above-testimonials">

  <!-- Testimonials -->

  <section id="testimonials">
    <div id="testimonial-carousel" class="carousel slide" data-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class= "shadowbox">
            <h2 class="testimonial-text">I had a great experience at Hoteldeck Mumbai. Their facilities, hospitality adds to the vibrant ambience of that place. Looking forward to stay in Hoteldeck Mumbai on my next visit.</h2>
            <img class="testimonial-image" src="images/hms_rohan.jpg" alt="profile-picture">
            <em>Rohan Patil, Mumbai</em>
          </div>

        </div>
        <div class="carousel-item ">
          <div class="shadowbox">
            <h2 class="testimonial-text">I would highly rate the customer friendly service by Hoteldeck and recommend it to others. The amenities provided by them makes them one of the best in India. </h2>
            <img class="testimonial-image" src="images/hms_ritik.jpg" alt="profile-picture">
            <em>Ritik Patil, Mangluru</em>
          </div>

        </div>
      </div>
      <a class="carousel-control-prev " href="#testimonial-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon "></span> </a>
      <a class="carousel-control-next " href="#testimonial-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon "></span> </a>
    </div>
  </section>
  <hr class="top-bottom-0">

  <!-- Pricing -->

  <section id="pricing">
    <h2 class="pricing-heading">Hoteldeck brings the finest plans for our regular customers' needs.</h2>
    <p>Sign Up now for the affordable schemes to avail great discounts in your bookings.</p>
<div class = "row">
  <div class = " col-lg-4 col-md-6 pricing-column">
    <div class = " card self-card-dimensions">
      <div class = "card-header">
        <h3>Classic</h3>
      </div>
      <div class = "card-body">
        <h2>Free</h2>
        <p>Upto 20% off on bookings</p>
        <p>Upto 10% off on meals</p>
        <p>5% off on other amenities used.</p>
        
        <a href="m1_script.php" class = "btn btn-lg btn-block btn-dark self-card-button-1-2" type="button">Sign Up</a>
      </div>
    </div>
  </div>
  <div class = "pricing-column col-lg-4 col-md-6">
    <div class = "card self-card-dimensions">
      <div class = "card-header">
        <h3>Pro</h3>
      </div>
      <div class = "card-body">
        <h2>₹8000 / yr</h2>
        <p>25% off on bookings</p>
        <p>20% off on meals</p>
        <p>Free sport games and live music</p>
        
        <a href="member_two.php" class = "btn btn-lg btn-block btn-outline-dark self-card-button-1-2" type="button">Sign Up</a>
      </div>
    </div>
  </div>
  <div class = "pricing-column col-lg-4">
    <div class = "card self-card-dimensions">
      <div class = "card-header">
          <h3>Premium</h3>
      </div>
      <div class = "card-body">
        <h2>₹15000 / yr</h2>
        <p>30% off on bookings</p>
        <p>35% off on meals</p>
        <p>Free sport games, live music, conference rooms. </p>
        <p>40% off on other amenities used.</p>
        
        <a href="member_three.php" class = "btn btn-lg btn-block btn-dark" type="button">Sign Up</a>
      </div>
    </div>
  </div>
</div>

</section>
<hr class="top-bottom-0">
  <!-- Call to Action -->

  <section id="cta">

    <h2 class = "cta-heading">For any queries get in touch with our support team now !</h2>
    <i class="self-support-team fas fa-users"></i><br >
    
    <a href="enquiry.php" class= "request-button btn btn-lg btn-danger" type="button">Make a request</a>


  </section>


  <!-- Footer -->

  <footer id="footer">
    <a href="www.facebook.com"><i class="social-media-icon fab fa-facebook-f "></i></a>
  <a href="www.twitter.com"><i class="social-media-icon fab fa-twitter"></i></a>
    <a href="www.instagram.com"><i class="social-media-icon fab fa-instagram"></i></a>
<a href="www.gmail.com"><i class="social-media-icon fas fa-envelope"></i></a>
    <p>© Copyright 2020 Hoteldeck</p>

  </footer>
</body>


</html>
