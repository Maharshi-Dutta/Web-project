


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/homecustoms.css">
    <link rel="stylesheet" href="css/glitch.css">
    <link rel="stylesheet" href="css/topbrands.css">
    <script src="js/nav.js"></script>
    <script defer src="js/slider.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
     <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <script src="https://kit.fontawesome.com/fd7eeef3bd.js" crossorigin="anonymous"></script>
</head>

<body style="background-color: rgb(0, 0, 0) ;margin-top: 0;left: 0;">
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



<!-- /////////////////////////////////////// -->

<div style="margin-top: -20px;padding: 0px 80px;" >
<div class="demo-cont">
    <!-- slider start -->
    <div class="fnc-slider example-slider">
      <div class="fnc-slider__slides">
        <!-- slide start -->
        <div class="fnc-slide m--blend-green m--active-slide">
          <div class="fnc-slide__inner">
            <div class="fnc-slide__mask">
              <div class="fnc-slide__mask-inner"></div>
            </div>
            <div class="fnc-slide__content">
              <h2 class="fnc-slide__heading">
                <div class="fnc-slide__heading-line">
                  <span style="color:red">BMW</span>
                </div>
                <div class="fnc-slide__heading-line">
                    <span>1000R</span>
                  </div>
                
              </h2>
              
            </div>
          </div>
        </div>
        <!-- slide end -->
        <!-- slide start -->
        <div class="fnc-slide m--blend-dark">
          <div class="fnc-slide__inner">
            <div class="fnc-slide__mask">
              <div class="fnc-slide__mask-inner"></div>
            </div>
            <div class="fnc-slide__content">
              <h2 class="fnc-slide__heading">
                <div class="fnc-slide__heading-line">
                  <span style="color: rgb(36, 219, 36);">Kawasaki</span>
                </div>
                <div class="fnc-slide__heading-line">
                  <span>Ninja H2</span>
                </div>
              </h2>
              
            </div>
          </div>
        </div>
        <!-- slide end -->
        <!-- slide start -->
        <div class="fnc-slide m--blend-red">
          <div class="fnc-slide__inner">
            <div class="fnc-slide__mask">
              <div class="fnc-slide__mask-inner"></div>
            </div>
            <div class="fnc-slide__content">
              <h2 class="fnc-slide__heading">
                <div class="fnc-slide__heading-line">
                  <span style="color: rgb(235, 19, 19);">Yamaha</span>
                </div>
                <div class="fnc-slide__heading-line">
                  <span>R1</span>
                </div>
              </h2>
             
            </div>
          </div>
        </div>
        <!-- slide end -->
        <!-- slide start -->
        <div class="fnc-slide m--blend-blue">
          <div class="fnc-slide__inner">
            <div class="fnc-slide__mask">
              <div class="fnc-slide__mask-inner"></div>
            </div>
            <div class="fnc-slide__content">
              <h2 class="fnc-slide__heading">
                <div class="fnc-slide__heading-line">
                  <span style="color: rgb(59, 37, 1);">Harley</span>
                </div>
                <div class="fnc-slide__heading-line">
                  <span>Davidson</span>
                </div>
              </h2>
              
            </div>
          </div>
        </div>
        <!-- slide end -->
      </div>
      <nav class="fnc-nav">
        <div class="fnc-nav__bgs">
          <div class="fnc-nav__bg m--navbg-green m--active-nav-bg"></div>
          <div class="fnc-nav__bg m--navbg-dark"></div>
          <div class="fnc-nav__bg m--navbg-red"></div>
          <div class="fnc-nav__bg m--navbg-blue"></div>
        </div>
        <div class="fnc-nav__controls">
          <button class="fnc-nav__control">
           BMW
            <span class="fnc-nav__control-progress"></span>
          </button>
          <button class="fnc-nav__control">
           NINJA H2
            <span class="fnc-nav__control-progress"></span>
          </button>
          <button class="fnc-nav__control">
          R 1
            <span class="fnc-nav__control-progress"></span>
          </button>
          <button class="fnc-nav__control">
            Harley
            <span class="fnc-nav__control-progress"></span>
          </button>
        </div>
      </nav>
    </div>
</div>
<div style="background-image: linear-gradient(rgba(47, 235, 216, 0.733),rgb(162, 22, 22),black);box-shadow: 5px 10px 2px -5px rgba(0, 0, 0, 0.7) inset, -5px -5px 5px -2px rgba(255, 255, 255, 0.2) inset;background-size: contain;border-radius: 50px;
background-repeat: no-repeat;background-size: cover;" align="center" data-aos="fade-up"  data-aos-duration="1500">
  <br><br><br>
<div class="heading" style="display: flex;justify-content: center;align-items: center;">
      <div class="nav2" align="center">
        <li> <a href=""><i class="fa-solid fa-person-rays"></i>
            <p>What We Provide</p>
          </a></li>
      </div>
    </div>
  
<div style="margin-top: 20%;display: flex;justify-content: center;align-items: center;" data-aos="fade-up"  data-aos-duration="1500" >
  
  
  <div class="cardsmain"  >
    <a href="checkout/index.php" alt="Mythrill" target="_blank" style="border-radius: 20px;">
      <div class="card"style="border-radius: 20px;">
        <div class="wrapper">
          <img src="img/parts.jpeg" class="cover-image" style="border-radius: 20px;"/>
        </div>
        <img src="img/Parts Shop.png" class="title" />
        <img src="img/parts-PhotoRoom.png-PhotoRoom.png" class="character" />
      </div>
    </a>
  </div>
  
  <div class="cardsmain" style="margin-top: 20px;margin-left: 15%;" >
    <a href="Showcase.php" alt="Mythrill" target="_blank">
      <div class="card">
        <div class="wrapper2">
          <img src="img/customise.jpeg" class="cover-image" />
        </div>
        
        <img src="img/PreBuilt ShowCase.png" class="title" />
        <img src="img/customise-PhotoRoom.png-PhotoRoom.png" class="character" />
      </div>
    </a>
  </div>
  
 
 </div>
<section style="box-shadow: 5px 10px 2px -5px rgba(0, 0, 0, 0.7) inset, -5px -5px 5px -2px rgb(123, 255, 0) inset;
border-radius: 50px; background-image: linear-gradient(15deg, #e69720 0%, #170dd8 150%);margin-top: 15%;" data-aos="fade-up"  data-aos-duration="1500">
<br><br><br>
  <div class="heading" style="width: 22%;" >
    <ul class="nav2" style="display: flex ;justify-content: center;align-items: center;">
      <li> <a href=""><i class="fa-solid fa-person-rays"></i>
          <p>Top Brands</p>
        </a></li>
    </ul>
  </div>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<section class="hero-section" data-aos="fade-up"  data-aos-duration="1500">
  <div class="cards-grid">
    <a class="cards" href="Bmw.php">
      <div class="cards__background" style="background-image: url(img/BMW\ 1000.jpg)" ></div>
      <div class="cards__content">
        <p class="cards__category">Bike</p>
        <h3 class="cards__heading">BMW</h3>
      </div>
    </a>
    <a class="cards" href="#">
      <div class="cards__background" style="background-image: url(img/2022_thebikeshedshow_01.webp)"></div>
      <div class="cards__content">
        <p class="cards__category">Model</p>
        <h3 class="cards__heading">San Francisco Showcase</h3>
      </div>
    </a>
    <a class="cards" href="dugati.php">
      <div class="cards__background" style="background-image: url(img/Bike\,\ bikes\,\ bike\ wallpaper\,\ bikes\ wallpaper\,\ bikes\ wallpaper\ iphone\,\ bikes\ wallpaper\ hd\ 1080p\,\ bike.jpg)"></div>
      <div class="cards__content">
        <p class="cards__category">Bike</p>
        <h3 class="cards__heading">Ducati</h3>
      </div>
    </li>
    <a class="cards" href="kawasaki.php">
      <div class="cards__background" style="background-image: url(img/kawasaki.jpeg);transform: scaleX(-1);"></div>
      <div class="cards__content">
        <p class="cards__category">Bike</p>
        <h3 class="cards__heading">Kawasaki</h3>
      </div>
    </a>
    <a class="cards" href="kawasaki.php">
      <div class="cards__background" style="background-image: url(/img/bike12.jpg)"></div>
      <div class="cards__content">
        <p class="cards__category">Showroom</p>
        <h3 class="cards__heading">Australian Flames</h3>
      </div>
    </a>
    <a class="cards" href="Erick Bulle.php">
      <div class="cards__background" style="background-image: url(/img/WhatsApp\ Image\ 2023-07-20\ at\ 9.02.03\ PM.jpeg)"></div>
      <div class="cards__content">
        <p class="cards__category">model</p>
        <h3 class="cards__heading">Singapore Heat</h3>
      </div>
    </a>
    <a class="cards" href="#">
      <div class="cards__background" style="background-image: url(/img/e26fa9bc-997a-4904-944e-44c26536e5fd.jpg)"></div>
      <div class="cards__content">
        <p class="cards__category">Showroom</p>
        <h3 class="cards__heading">Brazilian Hector</h3>
      </div>
    </a>
    <a class="cards" href="#">
      <div class="cards__background" style="background-image: url(/img/WhatsApp\ Image\ 2023-07-20\ at\ 9.08.07\ PM.jpeg)"></div>
      <div class="cards__content">
        <p class="cards__category">Showroom</p>
        <h3 class="cards__heading">Delhi Motors</h3>
      </div>
    </a>
  <div>
</section>

</section>




</div></div>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>
