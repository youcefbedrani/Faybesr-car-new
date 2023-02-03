<!DOCTYPE html>
<?php
@include '../Database/config.php';
?>
<html>

<head>
   <link rel="stylesheet" href="../css/style-restration.css">
   <link rel="stylesheet" href="../css/style-ca1r.css">
   <link rel="stylesheet" href="../css1/style.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
      .contain {
         margin: 212px auto;
         height: 907px;
      }
   </style>
</head>

<body>
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
            <img src="../image/1.png" alt="" width="220px" height="170px">
            <ul>
               <li>
                  <a href="../index-car.php">
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
                  <a href="index-Contact.php">
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
   <?php
   if (isset($_POST['submit'])) {
      $frname = $_POST['frname'];
      $ltname = $_POST['ltname'];
      $email = $_POST['email'];
      $Address = $_POST['Address'];
      $number = $_POST['number'];
      $Password = $_POST['Password'];

      $query = "insert into USER (FNAME,LNAME,EMAIL,ADRESSE,PNUMBER,PASSWORD) values ('" . $frname . "','" . $ltname . "','" . $email . "','" . $Address . "','" . $number . "','" . $Password . "')";

      $result = mysqli_query($connect, $query);

      if ($result) {
         header('location:shop.php');
      } else {
         echo "<br> DATA IS NOT INSERTED </br>";
      }
   }
   ?>
   <div class="contain">
      <center><img src="../image/Asset 1.png" alt="faybestlog-png"></center>
      <br>
      <h1>Sing-up</h1>
      <br>
      <form action="" method="POST">
         <br>
         <label for="one-login" id="one">Firstname :</label>
         <input type="text" id="one-login" name="frname" placeholder="Your first name">
         <br>
         <label for="one-login" id="one">Lastname :</label>
         <input type="text" id="one-login" name="ltname" placeholder="Your last name">
         <br>
         <label for="one-login" id="one">Email :</label>
         <input type="email" id="one-login" name="email" placeholder="Email">
         <br>
         <label for="one-login" id="one">Address :</label>
         <input type="text" id="one-login" name="Address" placeholder="Address with detail.">
         <br>
         <label for="one-login" id="one">Phone number :</label>
         <input type="text" id="one-login" name="number" placeholder="+213 (- - - - - - - - -)">
         <br>
         <label for="pass-login" id="one">Password :</label>
         <input type="password" id="pass-login" name="Password" placeholder="Password">
         <br>
         <br>
         <input type="submit" value="insert" name="submit" id="one">
      </form>
      <br>
   </div>
   <section class="footer" style="background-image: url(../image1/footer1.jpg);">
      <div class="consultation" style="background-image: url(../image1/footer2.jpg)">
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
                     <img src="../image1/recent cars1.jpg" alt="" />
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
                     <img src="../image1/recent cars2.jpg" alt="" />
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
                     <img src="../image1/recent cars3.jpg" alt="" />
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
   <?php
   mysqli_close($connect);
   ?>
</body>

</html>