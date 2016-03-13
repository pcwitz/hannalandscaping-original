<!DOCTYPE html>
<html lang="en"> 
  <head> 
    <title>Cincinnati Landscape Designer | Hanna Landscaping and Design | Contact</title>
    <meta charset=utf-8>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="description" content="Hanna Landscaping and Design serves Cincinnati and its suburbs in complete yard and lawn landscape installation, maintenance, and replacement." />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Cincinnati Landscape Designer | Hanna Landscaping and Design | Contact" />
    <meta property="og:description" content="Hanna Landscaping and Design serves Cincinnati and its suburbs in complete yard and lawn landscape installation, maintenance, and replacement." />
    <meta property="og:url" content="http://hannalandscaping.com/" />
    <meta property="og:site_name" content="Hanna Landscaping and Design" />

    <link rel="stylesheet" type="text/css" href="style.css"> 

    <!-- Add Google analytics -->
    <script src="js/google-analytics.js"></script>
</head>

<body>
  <!-- @begin contact -->
  <div id="page-wrap">
    
      <div class="row0">
        <div class="col-2-3">
          <a href="index.html" id="hlink">
          <img id="trowel" src="./images/trowel.gif" alt="trowel">

          <header>
          <h1 title="Hanna Landscaping and Design">Hanna Landscaping and Design</h1>
          <small id="in">"ain't nothing to it, but to do it"</small>
          </header>
          </a>
        </div>
        
        <div class="col-1-3">
          <header>
          <h2 id="right" itemprop="telephone">513.708.7765
            <img id="phone" src="./images/mobile.svg" alt="telephone">
            <a href="//plus.google.com/u/0/106449370396466738752?prsrc=3" rel="publisher" target="_blank"><img id="newreview" src="./images/g+29.png" alt="Google+"/>
            </a>
          </h2>
          <small>adam@hannalandscaping.com</small>
          </header>
        </div>
      </div>
  
    <div class="row_nav">
      <nav>
        <ul> 
          <div class="col-1-8">
            <li class="hov"><a href="about.html">about</a></li>
          </div>
          <div class="col-1-8">
            <li class="hov"><a href="expertise.html">expertise</a></li>
          </div>
          <div class="col-1-8">
            <li class="hov"><a href="ideas.html">ideas</a></li>
          </div>
          <div class="col-1-8">
            <li class="hov"><a href="contact.php">contact</a></li>
          </div>
        </ul>
      </nav>

      <div class="col-1-2">
        <div id="mod0">
          <div id="address" itemscope itemtype="http://schema.org/LocalBusiness">
            <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
              <span itemprop="streetAddress">9330 Arnold Lane</span> &middot;
              <span itemprop="addressLocality">Loveland,</span>
              <span itemprop="addressRegion">Ohio</span> &middot;
              <span itemprop="postalCode">45140</span>
            </span>
          </div> <!-- end address -->
        </div> <!-- end mod0 -->
      </div> <!-- end col-1-2 -->
    </div> <!-- end row_nav -->

    <h2 id="contact">Contact Us</h2>
      <p id="left">
      Please use the contact form below to send us any information we
      may need.
      </p>
      
<?php
  
  if (isset($_POST['submit']) && $_POST['submit'] == "submit")
  {
    $contactName = $_POST["contactName"];
    $email = $_POST["email"];
    $message = $_POST["comments"];

    if (empty($contactName) || empty($email) || empty($message))
    {
      echo '<p id="warn">Please complete the form.</p>';
    }
    else
    {
      $to = "adam@hannalandscaping.com";
      $subject = "hannalandscaping.com";
      $header = "From: $email" . "\r\n" . "Bcc: pcwitz@yahoo.com";
      mail ($to, $subject, $message, $header);

      $re = "Hanna Landscaping and Design";
      $reply = "Thank you for contacting Adam at Hanna Landscaping and Design. We will be in touch.\n\n" . "Best regards,\n\n" . "Adam Hanna\n" . "Landscape Design Professional\n" . "adam@hannalandscaping.com\n" . "ph: 513.708.7765";
      $headers = "From: adam@hannalandscaping.com" . "\r\n" . "Bcc: pcwitz@yahoo.com";
      mail ($email, $re, $reply, $headers);
      
      echo "<p class='left'>Thank you for contacting Adam at Hanna Landscaping and Design. We will be in touch.</p>";
    }
  }
?>

  
  <div class="row1">
    <div class="col-1-2">
      <div class="mod2_contact">
        <form action="contact.php" method="post">
          <input type="text" name="contactName" id="contactName" value="" placeholder="Name" />
          <input type="text" name="email" id="email" value="" placeholder="Email" />
          <br>

          <div id="message">
            <label>Message:</label>
            <textarea rows="10" cols="50" name="comments" id="commentsText"></textarea>
            <br>

            <button id="subbutton" type="submit" name="submit" value = "submit">Send!</button>
          </div> 
        </form>
      </div>
    </div>
    
    <div class="col-1-2">
      <div class="mod2_contact">
        <img id="plant" src="./images/cutplant.jpg" alt="young plant in soil">
      </div>
    </div>
  </div><!--end row1-->
</div> <!--end page_wrap-->
    <div class="row_footer">
      <div class="col-whole">
          <footer>
            &copy;2015 &middot; <span itemprop="name">Hanna Landscaping and Design</span> &middot; adam@hannalandscaping.com &middot; <span itemprop="telephone">513.708.7765</span>
          </footer>
      </div>
    </div> <!--end row_footer-->
</body>
</html>