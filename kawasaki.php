<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="css/kawasaki.css">
    <link rel="stylesheet" href="css/circularnav.css">
    <link rel="stylesheet" href="css/choose.css">

    <script src="js/nav.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <script src="https://kit.fontawesome.com/fd7eeef3bd.js" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
    <script defer src="js/circularnav.js"></script>
    <script src="js/kawasaki.js"></script>
</head>
    <title>Document</title>
</head>
<body style="background-image: linear-gradient(white,rgb(0, 0, 0));top: 0px;left: 0px;">
  <div style="padding: 50px;background-color: #0d0e0f;border-radius: 30px;">
    <div style="float: right;">
      <a href="" style="color: aliceblue; margin-left: 10vh;"><i class="fa-brands fa-facebook fa-2xl"id="facebook"></i></a>
      <a href="" style="color: aliceblue; margin-left: 10vh;"><i class="fa-brands fa-square-instagram fa-2xl"id="facebook"></i></a>
      <a href="" style="color: aliceblue; margin-left: 10vh;"><i class="fa-brands fa-twitter fa-2xl"id="facebook"></i></a>
      <a href="" style="color: aliceblue; margin-left: 10vh;"><i class="fa-brands fa-linkedin fa-2xl"id="facebook"></i></a>
  </div>
  <a href=""><i class="fa-solid fa-motorcycle fa-2xl" style="color: #c11515;margin-left: 5vh;"id="facebook"></i></a>
</div>
<br>
<!-- partial:index.partial.php -->
<!-- <div style="margin-top: -16px;"> -->
  <span id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <ul class="nav">
    
        <li><a href="home.php"><i class="fa-solid fa-house-chimney"></i></i>
            <p>HOME</p>
          </a></li>
        <li> <a href="Bmw.php"><i class="fi fi-br-briefcase"></i>
            <p>CUSTOMS</p>
          </a></li>
        <li> <a href="choose.php"><i class="fi fi-rr-coins"></i>
            <p>WHEELS</p>
          </a></li>

        <li> <a href="contact.php"><i class="fa-solid fa-envelope"></i>
            <p>CONTACTS</p>
          </a></li>
          <li> <a href="admin.php"><i class="fa-solid fa-envelope"></i>
            <p>LOGOUT</p>
          </a></li>
        <div class="active1"></div>
      </ul>
    </span>
    
  <!-- Use any element to open the sidenav -->
  <span onclick="openNav()"id="hide"><i class="fa-solid fa-bars fa-2xl" style="color: #11ff00;
      width: 40px ;margin-top: -75px; padding-left: 40px;cursor:pointer ; position: fixed; 
    z-index: 10"></i></span>
  
  <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
  <span id="main">
  </span>

<br>
<!-- Circular Nav -->

<div class="cirnav" >
  <div class="menu draggable">
    <div class="toggle nav">
      <ion-icon name="Add" style="margin-left: 22vh;"></ion-icon>
    </div>
    <li class="icon" style="--i: 0">
      <a href="bmw.php"><img src="img/BMW Logo .png" alt="BMW" style="padding: 5px; background-color: azure;border-radius: 30px;" class="logo"></a>
       </li>
       <li class="icon" style="--i: 1">
         <a href="dugati.php"><img src="img/dugatilogo.png" alt="Ducati" style="padding: 5px; background-color: azure;border-radius: 30px; transform: rotate(-40deg);" class="logo"></a>
       </li>
       </li>
       <li class="icon" style="--i: 3">
         <a href="harley.php"><img src="img/harleylogo.png" alt="Harley" style="padding: 5px; background-color: azure;border-radius: 30px; transform: rotate(178deg);" class="logo"></a>
       </li>
       </li>
       <li class="icon" style="--i: 4">
         <a href="kawasaki.php"><img src="img/kawasakilogo.png" alt="Kawasaki" style="padding: 5px; background-color: azure;border-radius: 30px; transform: rotate(135deg);" class="logo"></a>
       </li>
       </li>
       <li class="icon" style="--i: 5">
         <a href="Erick Bulle.php"><img src="img/ericbuell logo.png" alt="ericbuell" style="padding: 5px; background-color: azure;border-radius: 30px; transform: rotate(90deg);" class="logo"></a>
       </li>
       </li>
    <!-- <li class="icon" style="--i: 6">
      <a href=""><img src="img/dugatilogo.png" alt="BMW" style="padding: 5px; background-color: azure;border-radius: 30px; transform: rotate(-40deg);"></a>
    </li>
    </li>
    <li class="icon" style="--i: 7">
      <a href=""><img src="img/dugatilogo.png" alt="BMW" style="padding: 5px; background-color: azure;border-radius: 30px; transform: rotate(-40deg);"></a>
    </li>
    </li> -->
  </div>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- partial -->
 

</div> 
<div>
  <img src="img/Kawasaki/Kawasaki-Logo.png" alt="BMW" srcset="" align="center" style="height: 80px;float: right;mix-blend-mode: color-burn;">
  </div>
<p style="font-size: 50px;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Models We Provide Service On</p>
<div align="center" class="View" >
  <div class="sports" data-aos="fade-up"  data-aos-duration="2000">
  <b><p style="font-size: 40px;color: rgb(0, 0, 0);">Sports</p></b>
<div style="display: flex;justify-content: center;align-items: center;">
      <div class="cards">
        <div class="geeks">
          <img src="/img/Kawasaki/Myproject.png" style="height: 260px;">
        </div>
        <div class="title">
          <h2 style="color: aliceblue;">NINJA H2R<br> Reveal your racing attitude.</h2>

        </div>
</div>
<div class="cards">
  <div class="geeks">
    <img src="/img/Kawasaki/23EX650P_S_44SGN1DRS3CG_A-removebg-preview.png" style="height: 260px;">
  </div>
  <div class="title">
    <h2 style="color: aliceblue;">NINJA ZX-10R <br> The superbike of superlatives.</h2>

  </div>
</div><div class="cards">
  <div class="geeks">
    <img src="/img/Kawasaki/23ZX1002L_40RGN1DRS3CG_A-removebg-preview.png" style="height: 260px;">
  </div>
  <div class="title">
    <h2 style="color: aliceblue;">NINJA 650 <br>  The superbike of superlatives.</h2>

  </div>
</div>

</div>
  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <div class="RoadSter" data-aos="fade-up"  data-aos-duration="1500" >
    <b><p style="font-size: 40px;color: rgb(0, 0, 0);">RoadSter</p></b>
  <div style="display: flex;justify-content: center;align-items: center;">
        <div class="cards">
          <div class="geeks">
            <img src="/img/Kawasaki/23EN650D-J_44SGY1DLS1CG_A-1-removebg-preview.png" style="height: 260px;">
          </div>
          <div class="title">
            <h2 style="color: aliceblue;">Z H2 SE<br> Awaken the Daredevil.</h2>
  
          </div>
  </div>
  <div class="cards">
    <div class="geeks">
      <img src="/img/Kawasaki/23ZR1000L_R_40RGY2DLS3CG_A-removebg-preview.png" style="height: 260px;">
    </div>
    <div class="title">
      <h2 style="color: aliceblue;">Z H2 <br> Challenge your city.</h2>
  
    </div>
  </div>
  <div class="cards">
    <div class="geeks">
      <img src="/img/Kawasaki/23ZR1000L_R_40RGY2DLS3CG_A-removebg-preview.png" style="height: 260px;">
    </div>
    <div class="title">
      <h2 style="color: aliceblue;">Z900 <br> Challenge your city.</h2>
  
    </div>
  </div>
  
  </div>
    </div>
   

  

</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<div align="center">
  <b><p style="font-size: 40px;color: rgb(0, 0, 0);">Some of Our Custom Styles</p></b>

     <div class="card2" data-aos="fade-up"  data-aos-duration="1500">
      
      <p>Z900</p>
      <button id="redR" onclick="redR()"></button>
      <button id="silverR" onclick="silverR()"></button>
      
      <div class="bikeimgl" id="bike2">
      </div>
     </div>
     <div class="card3" data-aos="fade-up"  data-aos-duration="1500">
      <p>BMW M1000R</p>
      <button id="blackBM" onclick="blackBM()"></button>
      <button id="red" onclick="red()"></button>
      <button id="whiteM" onclick="whiteM()"></button>
      <div class="bikeimgr3" id="bike3">
      </div>
     </div>
    </div>

<!-- AOS Plugin -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>