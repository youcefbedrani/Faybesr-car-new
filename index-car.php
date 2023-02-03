<!DOCTYPE html>
<html>

<head>
   <title>Faybest-Cars</title>
   <link rel="stylesheet" href="css/style-ca1r.css">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="viewport" content="height=device-height, initial-scale=1">
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Kufam:ital,wght@1,700&family=Oswald:wght@400;500&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <!-- hadji tahar -->
   <link rel="stylesheet" href="css1/try/css">
   <!-- botstrap -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="css1/style.css" />
   <!-- google font -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
   <!-- font awsom -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <style>
      #scrolltop {
         visibility: visible;
         animation-duration: 20s;
      }

      header .one {
         grid-template-columns: 26ch 28ch 34ch 1fr;
      }

      .Show_text {
         margin: -43rem 1.2rem 131px 13.8rem;
      }

      .card {
         color: black;
      }

      h5 {
         font-size: 20px;
      }

      p {
         font-size: 16px;
         font-weight: 100;
      }

      .Blog-Post .content-blog .container {
         height: auto;
      }

      section.expertise {
         background-image: url(./image1/thumb-1920-445974.jpg);
      }

      section.Why-us .content1 {
         background-image: url(./image1/whu\ us1.jpg);
      }
   </style>
</head>

<body>
   <?php
   include("Database/config.php");
   ?>
   <!--Bedrani header one -->
   <div class="container_head">
      <header>
         <nav class="one">
            <div class="phone">
               <a><i class="fa-solid fa-phone"></i></a>
               <span>+213551462476</span>
            </div>
            <div class="email">
               <a><i class="fa-solid fa-envelope"></i></a>
               <span>shop@faybest.com</span>
            </div>
            <div class="Day">
               <a><i class="fa-solid fa-clock"></i></a>
               <span>Mon-Sun: 8:00am - 6:00pm</span>
            </div>
            <div class="icon">
               <a href="php/index_login.php"><i class="fa-solid fa-user"></i></a>
               <a href="#"><i class="fa-brands fa-facebook"></i></a>
               <a href="#"><i class="fa-brands fa-twitter"></i></a>
               <a href="#"><i class="fa-brands fa-github"></i></a>
               <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            </div>

         </nav>
         <nav class="two">
            <img src="image/1.png" alt="" width="220px" height="170px">
            <ul>
               <li>
                  <a href="#">
                     <span>HOME</span>
                  </a>
               </li>
               <li>
                  <a href="#swip_one">
                     <span>FUATERED PRODUCT</span>
                  </a>
               </li>
               <li>
                  <a href="#ttt">
                     <span>COLLECTION</span>
                  </a>
               </li>
               <li>
                  <a href="php/shop.php">
                     <span>SHOP</span>
                  </a>
               </li>
               <li>
                  <a href="php/index-Contact.php">
                     <span>CONTACT</span>
                  </a>
               </li>
               <li>
                  <div class="container-2">
                     <span class="icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                     <input type="search" id="search" placeholder="Search..." />
                  </div>
               </li>
               <li class="button_menu">
                  <div id="container" onclick="myMove(this)">
                     <div class="bar1"></div>
                     <div class="bar2"></div>
                     <div class="bar3"></div>
                  </div>
                  <div id="textformenu">
                     <div class="buttonforside">
                        <p>Home</p>
                        <p>FUATERED PRODUCT</p>
                        <p>COLLECTION</p>
                        <p>SHOP</p>
                        <p>CONTACT</p>
                     </div>
                     <div class="textinfo">
                        <h2>+213551462476</h2>
                        <h2>faybest@gmail.com</h2>
                        <h2>Algeria-Djelfa-Zian_Achour</h2>
                     </div>
                  </div>
               </li>
            </ul>
         </nav>
      </header>
   </div>
   <!--Bedrani section one -->
   <div class="container_sect">
      <section class="sect_1">
         <img class="not_img" name="slideformobile" src="">
         <div class="show_text_none">
            <h1>Wellceome To Car House</h2>
               <p>Allow us to guide you Through the innovative stress <br> Free approach in finding you dream car.</p>
         </div>
         <div class="slide">
            <img id="image" name="slideone" class="slide_image" src="image/">
            <a class="button_to_slide_L" id="HOV_1" onclick="prev()"><i class="fa-solid fa-chevron-left"></i> </a>
            <a class="button_to_slide_R" id="HOV_2" onclick="next()"><i class="fa-solid fa-angle-right"></i></a>
         </div>
         <div class="Show_text">
            <p class="onethree">DZD</p>
            <p class="onetwo">9800</p>
            <p class="oneone">Monthly</p>
            <h1>Wellceome To Car House</h1>
            <p class="p_not">Allow us to guide you Through the innovative stress <br> Free approach in finding you dream car.</p>
            <button class="button_for_slide" href="php/shop.php">Get Started Now</button>
         </div>
         <div class="login">
            <button><span><a href="php/index_login.php">Login</a></span></button>
            <a href="index-restration.php">Sign-up.here</a>
         </div>
      </section>
      <section class="sect_2">
         <div class="text_difn">
            <h1>Fuatered
               <span style="color: var(--seconde-color); font-weight:bold;">Cars</span>
            </h1>
            <p>You Find All Kinde of Cars here And All Symbole Do You Need</p>
         </div>
         <div class="cars">
            <div class="car1" id="swip_one">
               <div class="img_text">
                  <img src="image/volgs2.jpeg" class="img_hov" alt="rang1">
                  <a href="php/product-car.php" class="hid_plus"><i class="fa-solid fa-plus"></i></a>
                  <h3 class="hov_not">FOR SALE</h3>
                  <p class="hov_not" style="color:white; margin: 166px 0 0 22px;  font-size: 1.2em; font-family: var(--font-family1);">168.999 DZD</p>
               </div>
               <div class="info">
                  <h2>Name of Car</h2>
                  <p><a><i class="fa-solid fa-location-dot"></i></a> Location </p>
                  <div class="car_info">
                     <h3>Petrol</h3>
                     <h3>4,000 km</h3>
                     <h3>Manual</h3>
                     <h3>Sport</h3>
                     <h3>White</h3>
                     <h3>2022</h3>
                  </div>
               </div>
            </div>
            <div class="car2" id="swip_one">
               <div class="img_text">
                  <img class="img_hov" src="image/peugeot1.jpeg" alt="rang1">
                  <a href="" class="hid_plus"><i class="fa-solid fa-plus"></i></a>
                  <h3>FOR SALE</h3>
                  <p class="hov_not" style="color:white; margin: 172px 0 0 22px;  font-size: 1.2em; font-family: var(--font-family1);">
                     168.999 DZD</p>
               </div>
               <div class="info">
                  <h2>Name of Car</h2>
                  <p><a><i class="fa-solid fa-location-dot"></i></a> Location </p>
                  <div class="car_info">
                     <h3>Petrol</h3>
                     <h3>4,000 km</h3>
                     <h3>Manual</h3>
                     <h3>Sport</h3>
                     <h3>White</h3>
                     <h3>2022</h3>
                  </div>
               </div>
            </div>
            <div class="car3" id="swip_one">
               <div class="img_text">
                  <a><img class="img_hov" src="image/fiat1.webp" alt="rang1"></a>
                  <a href="" class="hid_plus"><i class="fa-solid fa-plus"></i></a>
                  <h3>FOR SALE</h3>
                  <p class="hov_not" style="color:white; margin: 172px 0 0 22px;  font-size: 1.2em; font-family: var(--font-family1);">168.999 DZD</p>
               </div>
               <div class="info">
                  <h2>Name of Car</h2>
                  <p><a><i class="fa-solid fa-location-dot"></i></a> Location </p>
                  <div class="car_info">
                     <h3>Petrol</h3>
                     <h3>4,000 km</h3>
                     <h3>Manual</h3>
                     <h3>Sport</h3>
                     <h3>White</h3>
                     <h3>2022</h3>
                  </div>
               </div>
            </div>
            <div class="car4" id="swip_one">
               <div class="img_text">
                  <img src="image/volgs2.jpeg" class="img_hov" alt="rang1">
                  <a href="" class="hid_plus"><i class="fa-solid fa-plus"></i></a>
                  <h3 class="hov_not">FOR SALE</h3>
                  <p class="hov_not" style="color:white; margin: 166px 0 0 22px;  font-size: 1.2em; font-family: var(--font-family1);">168.999 DZD
                  </p>
               </div>
               <div class="info">
                  <h2>Name of Car</h2>
                  <p><a><i class="fa-solid fa-location-dot"></i></a> Location </p>
                  <div class="car_info">
                     <h3>Petrol</h3>
                     <h3>4,000 km</h3>
                     <h3>Manual</h3>
                     <h3>Sport</h3>
                     <h3>White</h3>
                     <h3>2022</h3>
                  </div>
               </div>
            </div>
            <div class="car5" id="swip_one">
               <div class="img_text">
                  <img class="img_hov" src="image/peugeot1.jpeg" alt="rang1">
                  <a href="" class="hid_plus"><i class="fa-solid fa-plus"></i></a>
                  <h3>FOR SALE</h3>
                  <p class="hov_not" style="color:white; margin: 172px 0 0 22px;  font-size: 1.2em; font-family: var(--font-family1);">
                     168.999 DZD</p>
               </div>
               <div class="info">
                  <h2>Name of Car</h2>
                  <p><a><i class="fa-solid fa-location-dot"></i></a> Location </p>
                  <div class="car_info">
                     <h3>Petrol</h3>
                     <h3>4,000 km</h3>
                     <h3>Manual</h3>
                     <h3>Sport</h3>
                     <h3>White</h3>
                     <h3>2022</h3>
                  </div>
               </div>
            </div>
            <div class="car6" id="swip_one">
               <div class="img_text">
                  <a><img class="img_hov" src="image/fiat1.webp" alt="rang1"></a>
                  <a href="" class="hid_plus"><i class="fa-solid fa-plus"></i></a>
                  <h3>FOR SALE</h3>
                  <p class="hov_not" style="color:white; margin: 172px 0 0 22px;  font-size: 1.2em; font-family: var(--font-family1);">168.999 DZD
                  </p>
               </div>
               <div class="info">
                  <h2>Name of Car</h2>
                  <p><a><i class="fa-solid fa-location-dot"></i></a> Location </p>
                  <div class="car_info">
                     <h3>Petrol</h3>
                     <h3>4,000 km</h3>
                     <h3>Manual</h3>
                     <h3>Sport</h3>
                     <h3>White</h3>
                     <h3>2022</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="sect_3">
         <div class="servise">
            <h1>What Are You Looking For</h1>
            <p>All servises Do You Need is here For Best <br> Experiece For You</p>
            <button>Read More</button>
         </div>
         <div class="servise_num">
            <div class="serv_one" id="width">
               <div class="icon_3"><img class="img_3" src="image/shield-check.png" alt=""></div>
               <h2 id="thish2">Highly Secured</h2>
               <p class="p_one" id="pthis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt eiusmod tempor incididunt eiusmod</p>
            </div>
            <div class="serv_two" id="width">
               <div class="icon_3"><img class="img_3" src="image/flaticon-deal.png" alt=""></div>
               <h2 id="thish2">Highly Secured</h2>
               <p class="p_one" id="pthis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                  incididunt eiusmod tempor incididunt eiusmod</p>
            </div>
            <div class="serv_three" id="width">
               <div class="icon_3"><img class="img_3" src="image/flaticon-money.png" alt=""></div>
               <h2 id="thish2">Highly Secured</h2>
               <p class="p_one" id="pthis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                  incididunt eiusmod tempor incididunt eiusmod</p>
            </div>
            <div class="serv_four" id="width">
               <div class="icon_3"><img class="img_3" src="image/flaticon-support.png" alt=""></div>
               <h2 id="thish2">Highly Secured</h2>
               <p class="p_one" id="pthis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                  incididunt eiusmod tempor incididunt eiusmod</p>
            </div>
         </div>
      </section>
      <section class="sect_4" id="ttt">
         <div class="offer_difn">
            <h1>Latest <span style="color: red; font-weight: bold;">Offers</span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
         </div>
         <div class="offer">
            <div class="offer1">
               <img src="image/dacia1.jpg" alt="car-image">
               <h1 class="offer_h1"><a>MORE</a></h1>
               <div class="new">New</div>
               <p style="padding: 4.3rem 0 0 27px; color: red; position: absolute;"><span style="color: white; ">1050.00</span> Fixed
               </p>
               <h2 style="padding: 2rem 0 0 25px; color: white; position: absolute;">Name of car and Year</h2>
            </div>
            <div class="offer2">
               <img src="image/toyota5.jpeg"" alt=" car-image">
               <h1 class="offer_h1"><a>MORE</a></h1>
               <div class="new">New</div>
               <p style="padding: 4.3rem 0 0 27px; color: red; position: absolute;"><span style="color: white; ">1050.00</span> Fixed
               </p>
               <h2 style="padding: 2rem 0 0 25px; color: white; position: absolute;">Name of car and Year</h2>
            </div>
            <div class="offer3">
               <img src="image/volvo1.jpeg"" alt=" car-image">
               <h1 class="offer_h1"><a>MORE</a></h1>
               <div class="new">New</div>
               <p style="padding: 24.3rem 0 0 27px; color: red; position: absolute;"><span style="color: white; ">1050.00</span> Fixed
               </p>
               <h2 style="padding: 21.3rem 0 0 27px; color: white; position: absolute;">Name of car and Year</h2>
            </div>
            <div class="offer4">
               <img src="image/fiat2.png"" alt=" car-image">
               <h1 class="offer_h1"><a>MORE</a></h1>
               <div class="new">New</div>
               <p style="padding: 9.3rem 0 0 27px; color: red; position: absolute;"><span style="color: white; ">1050.00</span> Fixed</p>
               <h2 style="padding: 7.4rem 0 0 25px; color: white; position: absolute;">Name of car and Year</h2>
            </div>
         </div>
         <div id="scrolltop" onclick="doscroll()">
            <i class="fa-solid fa-arrow-up"></i>
         </div>
      </section>
   </div>
   <!-- end section badrani -->

   <!-- start section expertise -->
   <section class="expertise" style="padding: 140px 0">
      <div class="container">
         <div class="content">
            <div class="text">
               <h1>
                  More Than 10 Years Of<br />
                  <span>Experience</span>
               </h1>
               <p>
                  Lorem ipsum dolor sit,<br />
                  amet consectetur adipisicing elit
               </p>
            </div>
         </div>

         <div class="boxes">
            <div class="box">
               <span class="material-symbols-outlined">agriculture</span>
               <div class="res">
                  <h3 class="counter" data-num="999">0</h3>
                  <p>Total tractors</p>
               </div>
            </div>
            <div class="box">
               <span class="material-symbols-outlined">toys</span>
               <div class="res">
                  <h3 class="counter" data-num="777">0</h3>
                  <p>Total cars</p>
               </div>
            </div>
            <div class="box">
               <span class="material-symbols-outlined">two_wheeler</span>
               <div class="res">
                  <h3 class="counter" data-num="777">0</h3>
                  <p>Total moto</p>
               </div>
            </div>
            <div class="box">
               <span class="material-symbols-outlined">settings_accessibility</span>
               <div class="res">
                  <h3 class="counter" data-num="999">0</h3>
                  <p>Happy Clients</p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end section expertise -->

   <!-- start section our-team -->
   <section class="our-team">
      <div class="main-heading" style="padding-bottom: 122px">
         <h1>Our <span>Team</span></h1>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
      <div class="img-our-team">
         <div class="container">
            <div class="box one">
               <img src="image1/team1.jpg" style=" width:226px" alt="" />
               <div class="text-team">
                  <a href="#">
                     <h1>Hadji</h1>
                  </a>
                  <p>web developer</p>
               </div>
            </div>
            <div class="box three">
               <img src="image1/team1.jpg" alt="" />
               <div class="text-team">
                  <a href="#">
                     <h1>badrani</h1>
                  </a>
                  <p>web developer</p>
               </div>
            </div>
            <div class="box four">
               <img src="image1/team1.jpg" alt="" />
               <div class="text-team">
                  <a href="#">
                     <h1>badrani</h1>
                  </a>
                  <p>web developer</p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end section our-team -->

   <!-- start section Why-us -->
   <section class="Why-us">
      <div class="content1"></div>
      <div class="content2">
         <div class="main-heading">
            <h1>why <span>us?</span></h1>
            <div class="Founder slid-founder">
               <p>
                  Quae illo iste perspiciatis harum numquam quibusdam quidem sunt
               </p>
               <img src="image1/avatar icon1.png" alt="" width="100px" height="100px" />
               <h2>Mohamed Hadji</h2>
               <h3>web developer</h3>
            </div>
            <div class="Founder">
               <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae illo
                  iste
               </p>
               <img src="image1/avatar icon2.png" alt="" width="100px" height="100px" />
               <h2>Badrani Mohamed</h2>
               <h3>mobile developer</h3>
            </div>
            <div class="rectangle">
               <ul>
                  <li class="bg slidbg" onclick="preve1() & preve2()"></li>
                  <li class="bg" onclick="next1() & next2()"></li>
               </ul>
            </div>
         </div>
      </div>
   </section>
   <!-- end section section Why-us -->
   <?php
   include("Database/config.php");
   $query = "select * from blog";
   $r = mysqli_query($connect, $query);
   echo <<<"hero"
               <section class="Blog-Post">
                  <div class="main-heading" style="padding-bottom: 122px">
                  <h1>Latest <span>Blog Post</span></h1>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                     eiusmod
                  </p>
                  </div>
                  <div class="content-blog">
                  <div class="container">
         hero;
   while ($rwo = mysqli_fetch_array($r)) {
      echo <<<"hero"
            <div class="card" style="width: 18rem;">
               <img src="Database$rwo[image]" class="card-img-top" alt="...">
               <div class="card-body">
                  <h5 class="card-title">$rwo[name]</h5>
                  <p class="card-text">$rwo[Describetion]</p>
               </div>
               <ul class="list-group list-group-flush">
                  <li class="list-group-item">$rwo[Date]Date</li>
               </ul>
               <div class="card-body">
                  <a href="#" class="card-link">Read Article</a>
               </div>
            </div>
         hero;
   };
   echo "</div></div></section>"
   ?>
   <!-- start section footer -->
   <section class="footer" style="background-image: url(image1/footer1.jpg);">
      <div class="consultation" style="background-image: url(./image1/footer2.jpg)">
         <div class="container" style="padding-top: 90px">
            <p>Do you want to take advice from our team?</p>
            <a href="#">GET</a>
         </div>
      </div>
      <div class="container">
         <div class="footer-links" style="padding-top: 129px">
            <div class="footer-1">
               <div class="footer-text">
                  <h4>Contact Info</h4>
                  <div class="icon-text">
                     <span class="material-symbols-outlined">location_on</span>
                     <p>Djelfa, University Residence, Shaqra bin Saleh</p>
                  </div>
                  <div class="icon-text">
                     <span class="material-symbols-outlined">outgoing_mail</span>
                     <p>TaharHadji99@gmail.com</p>
                  </div>
                  <div class="icon-text">
                     <span class="material-symbols-outlined">phone_in_talk </span>
                     <p>0669610367</p>
                  </div>
                  <div class="icon-text">
                     <span class="material-symbols-outlined">fax</span>
                     <p>85X6 987</p>
                  </div>
                  <div class="icon-text">
                     <span class="material-symbols-outlined">language</span>
                     <p>FayBest.com</p>
                  </div>
               </div>
            </div>
            <div class="footer-2">
               <h4>Links</h4>
               <a href="#">Home</a>
               <a href="#">About Us</a>
               <a href="#">Services</a>
               <a href="#">Car Listing</a>
               <a href="#">Blog</a>
               <a href="#">Gallery</a>
               <a href="#">Contact Us</a>
               <a href="#">Elements</a>
            </div>
            <div class="footer-3">
               <h4>recent cars</h4>
               <div class="recent">
                  <div class="recent-cars">
                     <img src="image1/recent cars1.jpg" alt="" />
                     <div class="text-recent-cars">
                        <h5>Bentley Continental GT</h5>
                        <div class="text-recent-cars1">
                           <p>$793|</p>
                           <span class="material-symbols-outlined">calendar_month</span>
                           <p>28 jan 2022</p>
                        </div>
                     </div>
                  </div>
                  <div class="recent-cars">
                     <img src="image1/recent cars2.jpg" alt="" />
                     <div class="text-recent-cars">
                        <h5>Fiat Punto Red</h5>
                        <div class="text-recent-cars1">
                           <p>$1298|</p>
                           <span class="material-symbols-outlined">calendar_month</span>
                           <p>03 dec 2022</p>
                        </div>
                     </div>
                  </div>
                  <div class="recent-cars">
                     <img src="image1/recent cars3.jpg" alt="" />
                     <div class="text-recent-cars">
                        <h5>Nissan Micra Gen5</h5>
                        <div class="text-recent-cars1">
                           <p>$3924|</p>
                           <span class="material-symbols-outlined">calendar_month</span>
                           <p>12 dec 2022</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer-4">
               <h4>Subscribe</h4>
               <p>Subscribe now to the newsletter and get the latest briefs</p>
               <div class="newsletter">
                  <input class="input1" type="email" placeholder="email" />
                  <button class="input2">
                     <span class="material-symbols-outlined newsletter-send">
                        <a href="mailto:youcefwork99@gmail.com">send</a></span>
                  </button>
               </div>
            </div>
            <hr />
         </div>
         <div class="Rights">
            <p>© 2022 All Rights Reserved.</p>
            <div class="link-end">
               <a href="#" class="fac"><i class="fa-brands fa-facebook"></i></a>
               <a href="#" class="twi"> <i class="fa-brands fa-twitter"></i></a>
               <a href="#" class="ins"> <i class="fa-brands fa-instagram"></i></a>
               <a href="#" class="lin"> <i class="fa-brands fa-github"></i></a>
            </div>
         </div>
      </div>
   </section>
   <!-- end section footer -->
   <script src="javascript/indew-car.js"></script>
   <script src="js/main.js"></script>
   <?php
   mysqli_close($connect);
   ?>
</body>

</html>