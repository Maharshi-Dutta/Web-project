<?php

if ($_SERVER['REQUEST_METHOD'] == "POST"){
// Get the form data
$name = $_POST['your-name'];
$phone = $_POST['your-phone'];
$email = $_POST['your-email'];
$subject = $_POST['your-subject'];
$message = $_POST['your-message'];

// Connect to the database

$db = new mysqli("localhost","root","","contact");
if($db->connect_error){
  die("Connection Failed!".$db->connect_error);
}

// Insert the data into the database
$query = "INSERT INTO info (name, phone, email, subject, message) VALUES (?, ?, ?, ?, ?)";
$statement = $db->prepare($query);
$statement->execute(array($name, $phone, $email, $subject, $message));


echo "<script>alert('Your message has been sent successfully!');</script>";
// Redirect to the thank you page
header('Refresh: 2; url=Home.php');
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/nav.css">
    <script src="js/scroll.js"></script>
    <script src="js/nav.js"></script>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <script src="https://kit.fontawesome.com/fd7eeef3bd.js" crossorigin="anonymous"></script>
    <title>Contact</title>
</head>
<body style="background-image: url(img/cover.jpg);background-repeat: no-repeat;background-size: cover;">
  <span id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <ul class="nav">
    
        <li><a href="home.php"><i class="fa-solid fa-house-chimney"></i></i>
            <p>HOME</p>
          </a></li>
        <li> <a href="Showcase.php"><i class="fi fi-br-briefcase"></i>
            <p>Showcase</p>
          </a></li>
        <li> <a href="customparts.php"><i class="fi fi-rr-coins"></i>
            <p>SPA</p>
          </a></li>

        <li> <a href="harley.php"><i class="fa-solid fa-envelope"></i>
            <p>CUSTOMS</p>
          </a></li>

          <li> <a href="admin.php"><i class="fa-solid fa-envelope"></i>
            <p>LOGOUT</p>
          </a></li>
        <div class="active1"></div>
      </ul>
    </span>
  
  <!-- Use any element to open the sidenav -->
  <span onclick="openNav()"id="hide"><i class="fa-solid fa-bars fa-2xl" style="color: #11ff00;
      width: 40px ;padding-top: 40px; padding-left: 40px;cursor:pointer ; position: fixed; 
    z-index: 1"></i></span>
  
  <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
  <span id="main">
  </span>
 






  <div style="margin-left: 12%;">
    <div class="cards3">

      <div >

        <form action="" method="post"
         novalidate="novalidate" data-status="init">
          <div style="display: none;">
            <input type="hidden" value="6">
            <input type="hidden" value="5.6.4">
            <input type="hidden" value="en_US">
            <input type="hidden" value="wpcf7-f6-p176-o1">
            <input type="hidden" value="176">
            <input type="hidden" value="">
          </div>
          <div class="cfw ">
            <div>
              <div>
                <p style="display: none !important"><span><input type="hidden" name="referer-page"
                      value="https://rainbowit.net/themes/inbio/designer-two/"
                      data-value="https://rainbowit.net/themes/inbio/designer-two/"
                      aria-invalid="false"></span></p>

              </div>
              <div>
                <div class="form-group"><label for="contact-name">Your Name</label><span data-name="your-name"><input
                      type="text" name="your-name" value="" size="40"
                      id="contact-name"
                      aria-invalid="false"></span></div>
              </div>
              <div>
                <div class="form-group"><label for="contact-phone">Phone Number</label><span
                    data-name="your-phone"><input type="text" name="your-phone" value="" size="40"
                     id="contact-phone" aria-invalid="false"></span>
                </div>
              </div>
              <div>
                <div class="form-group"><label for="contact-email">Email</label><span data-name="your-email"><input
                      type="email" name="your-email" value="" size="40"
                     
                      id="contact-email" aria-required="true" aria-invalid="false"></span></div>
              </div>
              <div>
                <div class="form-group"><label for="contact-subject">Subject</label><span
                    data-name="your-subject"><input type="text" name="your-subject" value="" size="40"
                      id="contact-subject"
                      aria-invalid="false"></span></div>
              </div>
              <div>
                <div class="form-group"><label for="contact-message">Your Message</label><span
                    data-name="your-message"><textarea name="your-message" cols="40" rows="10"
                      id="contact-message"
                      aria-invalid="false"></textarea></span></div>
              </div>
              <div>
                <div>
                  <p style="display: none "><span>><input type="hidden" name="referer-page"
                       </p>

                </div>
                <br>
                <input type="submit" value="send" id="submit1"></span>

              </div>
            </div>
        </form>

      </div>

    </div>
    <div class="cfw">
      <div class="cfw">
        
            <img src="img/scroll1.png"class="cfw" id="scroll" style="padding: 5px;height:200px">
         
            <button style="position: fixed;top: 175px;
            right: 114px;background-color: transparent;border-radius: 50%;
            padding: 17px;border: transparent;
            transform: translate(-50%, -50%);"onclick="rotate()"></button>
            <button style="position: absolute;top: 175px;
            right: 582px;background-color:transparent;border-radius: 50%;
            padding: 17px;border: transparent;
            transform: translate(-50%, -50%);"onclick="rotateRev()"></button>
          </div>
          <div class="cfw">
            <h1><b style="color: aliceblue;">MAHARSHI DUTTA</b></h1>
            <h3><p style="color: dimgray;">Designer & Programmer
            </p>
            <p style="color: dimgray;">I am available for freelance work. Connect with me via call in to my account.
           </p>
           <br>
           <p style="color: dimgray;">Phone:91+***********</p>
           <p style="color: dimgray;">Email: ************@gmail.com
          </p>
          <p style="color: dimgray;">FIND WITH ME</p>
         </div>
    
        </div>
  
      </div>

    
  

</body>
</html>