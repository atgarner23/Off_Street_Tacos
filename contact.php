<?php include('scripts/contact-parse_new.php'); ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Off Street Tacos - Contact</title>
  <link href="css/reset.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/315022f2d0.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="scripts/validTests.js"></script>
  
</head>
<body>
  <div class="container">
  <header>
    <div class="logo">
      <img src="images/logo.svg" alt="Off Street Tacos Logo" class="logo-img">
      <div class="tagline">
        <h1>Off Street Tacos<br>
        <span>Toyota &#183; Jeep &#183; Subaru</span></h1>
      </div>
    </div>
    <nav class="top-nav">
      <button class="menu-btn"></button>
      <ul class="nav-list hidden">
        <li class="nav-item"><a href="about.html">About</a></li>
        <li class="nav-item current"><a href="contact.html">Contact</a></li>
        <li class="nav-item"><a href="parts.html">Parts</a></li>
        <li class="nav-item"><a href="service.html">Service</a></li>
        <li class="nav-item"><a href="blog.html">Blog</a></li>
        <li class="nav-item"><button class="close-btn"></button></li>
      </ul>
      <div class="utilities flex">
        <a href="email.html"><i class="fa-solid fa-user"></i></a>
        <a href="404.html"><i class="fa-solid fa-cart-shopping"></i></a>
        <a href="search.html"><i class="fa-solid fa-magnifying-glass"></i></a>
      </div>
    </nav>
  </header>
  <main class="contact-main-content">
      <h2 class="contact-head">Contact Us</h2>
    <form action="contact.php" method="post" name="contact" id="contact" autocomplete=true>
        <fieldset>
        <label for="fname" class="label">First name:</label>
            <div class="fname"><input type="text" id="fname" name="fname" required></div>

            <label for="lname" class="label">Last name:</label>
            <div class="lname"><input type="text" id="lname" name="lname" required></div>

            <label for="phone" class="label">Phone:</label>
            <div class="phone"><input type="tel" id="phone" name="phone" required></div>

            <label for="email" class="label">Email:</label>
            <div class="email"><input name="email" id="email" type="email" pattern="([\w\-\.]+)@((\[([0-9]{1,3}\.){3}[0-9]{1,3}\])|(([\w\-]+\.)+)([a-zA-Z]{2,8}))" placeholder="yourname@domain.com" required></div>
            <label for="message" class="label">Message:</label>
            <div class="message-box">
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
            </div>
            <input type="submit" value="submit" id="submit" name="submit">
            <input type="hidden" name="did_send" value="1">
            <?php
          //if the variable in the hidden field is true then form has been sent and php processed it correctly
            if($_REQUEST['did_send']==1){
            // start typing an open div tag with the correct class
              echo '<div class="'.$status.'">';
                // display the correct message 
                echo $display_msg;
              echo '</div>';
            //   This creates the following <div class="success">Your form was sent</div> 
            //   or <div class="notsent">sorry your form was not sent</div>
            } ?>
        </fieldset>
    </form>
    <!-- Newsletter Form -->
    <div class="newsletter-box">
      <h4 class="newsletter-head">Join our community!</h4>
      <p class="newsletter-cta">Receive an extra 10% off.</p>
      <form name="newsletterForm" id="newsletterForm" method="post" action="some sort of processor">
        <label for="fname">Name:</label>
        <input type="text" name="fname" id="fname" maxlength="50" placeholder="Dan">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="dmarino@miamidolphins.com">
      </form>
    </div>
  </main>
  <footer>
    <div class="footer-nav-box">
      <ul class="footer-nav">
        <li class="footer-nav-item"><a href="siteMap.html">Site Map</a></li>
        <li class="footer-nav-item"><a href="privacyPolicy.html">Privacy Policy</a></li>
        <li class="footer-nav-item"><a href="tos.html">Terms of Service</a></li>
        <li class="footer-nav-item"><a href="cancellationPolicy.html">Canellation Policy</a></li>
        <li class="footer-nav-item"><a href="returns.html">Returns Policy</a></li>
        <li class="footer-nav-item"><a href="shippingPolicy.html">Shipping Policy</a></li>
        <li class="footer-nav-item"><a href="customerService.html">Customer Service</a></li>
        <li class="footer-nav-item"><a href="404.html">404</a></li>
        <li class="footer-nav-item"><a href="email.html">Email</a></li>
      </ul>
    </div>
    <div class="socials">
      <a href="https://www.facebook.com" class="social-link">
        <img src="images/fb-icon.svg" alt="Facebook icon">
      </a>
      <a href="https://www.instagram.com" class="social-link">
        <img src="images/insta-icon.svg" alt="Instagram Icon">
      </a>
      <a href="https://www.twitter.com" class="social-link">
        <img src="images/twitter-icon.svg" alt="Twitter Icon">
      </a>
    </div>
    <img src="images/bbb-logo.png" alt="Better Business Bureau Accredidation" class="bbb-img">
    <img src="images/ase-logo.png" alt="Automotive Service Excellence badge" class="ase-img">
    <img src="images/ost-logo-big.svg" alt="Off Street Tacos Logo" class="footer-logo">
    <small class="copyright">&copy;Off Street Tacos 2022</small>
    <small class="site-design">Site design by <a href="https://www.agarnerdesigns.com">A. Garner Designs</a></small>
  </footer>
  </div>

  <!-- Javascript -->
  <script src="scripts/main.js"></script>
</body>
</html>