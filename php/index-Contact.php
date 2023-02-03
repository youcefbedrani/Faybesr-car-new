<!DOCTYPE html>
<?php
@include '../Database/config.php';
?>
<html>

<head>
   <link rel="stylesheet" href="../css/style-Contact.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Kufam:ital,wght@1,700&family=Oswald:wght@400;500&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
      @import url('https://fonts.googleapis.com/css2?family=Raleway&family=Zen+Dots&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&family=Zen+Dots&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap');

      :root {
         --main-color: #0A3250;
         --seconde-color: #0A3250;
         --seconde-main-color: rgb(255, 243, 133);
         --th-color: rgba(163, 163, 163, 0.476);
         --bg-color: rgba(0, 0, 0, 0.167);
         --bg-servise: #f1f1f1;
         --font-family1: 'Zen Dots', cursive;
         --font-family2: 'Roboto Condensed', sans-serif;
         --font-family3: 'Rubik', sans-serif;
         --font-family4: 'Kdam Thmor Pro', sans-serif;
      }

      .contain {
         margin: 43px auto;
      }

      h3 {
         text-align: center;
         margin: 20px 0;
      }

      main {
         margin: 2px;
      }

      table {
         width: 58%;
         margin: -33px 0 0 303px;
      }

      thead {
         background-color: #3498DB;
         padding: 1px;
      }

      tbody {
         background-color: white;
      }

      td {
         position: relative;
         top: -5px;
      }

      th {
         padding: 2px;
      }

      .shop {
         margin: 1px;
      }

      td a {
         margin: 3px 0px 39px 19px;
         font-size: 25px;
      }

      #formformtwo {
         margin: -351px 0px 1px 336px;
         visibility: visible;
      }

      .imgone {
         width: 200px;
         margin: 14px 22px 44px 134px;
         position: absolute;
         top: 6px;
      }

      .imgtwo {
         width: 159px;
         height: 100px;
         margin: 51px 0px 417px 643px;
      }

      h1 {
         position: absolute;
         display: inline;
         margin: -388px 0px 0px 478px;
      }

      .header {
         display: flex;
         justify-content: center;
         width: 100%;
         background-color: rgb(19, 25, 25);
      }

      .nav1 p {
         margin-top: 19px;
         margin-left: -314px;
         font-size: 18px;
         color: white;
         font-family: var(--font-family2);
      }

      .nav1 a {
         font-size: 22px;
         color: white;
      }

      .nav1 {
         display: inherit;
         height: 53px;
         backdrop-filter: blur(9px);
         width: 100%;
         justify-content: space-evenly;
         border-bottom: 1px solid var(--th-color);
      }

      .nav2 {
         margin-top: 53px;
         width: 100%;
         height: 120px;
         z-index: 12;
         margin-left: -1906px;
         backdrop-filter: blur(9px);
         border-bottom: 1px solid var(--th-color);
         font-family: var(--font-family1);
      }

      .nav2 img {
         width: 144px;
         height: 73px;
         margin: 1em 0 0 8em;
      }

      .nav2 .list {
         display: flex;
         justify-content: end;
         margin-right: 253px;
         margin-top: -54px;
         color: white;
      }

      .nav2 i a {
         font-size: 15px;
         color: white;
         margin-right: 43px;
      }

      .totosearch {
         width: 159px;
         height: 32px;
         background-color: #edf2fb;
         border-radius: 8px;
         position: relative;
         left: 1640px;
         top: -85px;
         position: relative;
         padding: 11px;
         color: rgb(0, 0, 0);
         font-family: var(--font-family4);
         border: 0px;
         transition: border 1s;
         transition: box-shadow 1s;
      }

      #tosearch {
         background-color: #edf2fb;
         position: relative;
         top: -86px;
         left: 1640px;
         width: 69px;
         height: 36px;
         padding: 8px;
         border-radius: 12px;
         font-family: var(--font-family4);
         border: 0px;
         transition: border 1s;
         transition: box-shadow 1s;
      }
   </style>
   </style>
</head>

<body>
   <img src="../image/contact.jpg" alt="car photo" style="width: 100%; height: 100%; position: absolute;">
   <section class="header">
      <div class="nav1" style="background-color: #00000057;">
         <a><i class="fa-solid fa-phone"></i></a>
         <p>+213551462476</p>
         <a><i class="fa-solid fa-envelope"></i></a>
         <p>shop@faybest.com</p>
         <a><i class="fa-solid fa-clock"></i></a>
         <p>Mon-Sun: 8:00am - 6:00pm</p>
      </div>
      <br>
      <div class="nav2" style="background-color: #00000057; margin-left: -1919px;">
         <img src="../image/1.png" alt="logo">
         <div class="list">
            <i><a href="../index-car.php">Home</a></i>
            <i><a href="../index-car.php">FUATERED PRODUCT</a></i>
            <i><a href="../index-car.php">COLLECTION</a></i>
            <i><a href="shop.php">SHOP</a></i>
            <i><a href="#">CONTACT</a></i>
         </div>
         <form action="../Database/search.php" method="POST">
            <input type="text" class="totosearch" name="totosearch" placeholder="Search...">
            <input type="submit" name="tosearch" value="Search" id="tosearch">
         </form>
      </div>
   </section>
   <div class="contain">
      <img class="imgone" src="../image/user.png" alt="">
      <img class="imgtwo" src="../image/Asset 1.png" alt="" sizes="" srcset="">
      <br>
      <h1>- Wellcome To Your FayBest Acount -</h1>
      <div class="leftbar">
         <a id="one" onclick="dsisplaytwo()">Acount</a>
         <a id="four" href="index-Acount.php">Order</a>
         <a id="five" href="../index-car.php">Product</a>
         <a id="six" href="shop.php">Shop</a>
         <a id="seven" onclick="dsisplayone()" style="background-color:#0A3250; color:white;">Contact</a>
      </div>
      <div id="formformtwo">
         <form class="oneoneone">
            <label for=""></label><!-- 1 -->
            <input type="text" id="two" placeholder="Firstname">
            <br>
            <label for=""></label><!-- 2 -->
            <input type="text" id="two" placeholder="Lastname">
            <br>
            <label for=""></label><!-- 3 -->
            <input type="email" id="two" placeholder="Email">
            <br>
            <label for=""></label><!-- 4 -->
            <input type="text" id="two" value="Djelfa - haybastin - N01 - M2" placeholder="Adresse">
            <br>
         </form>
         <form class="oneone">
            <br>
            <label for="subject" style="margin: 5px -5px 1px 1px;">Message</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height: 192px;
                  margin: 27px 0px 0px -56px;
                  width: 667px;"></textarea>
            <br>
            <a class="submit" href="mailto:youcefwork99@gmail.com">Send</a>
            <!--<input type="submit" value="Send" href="mailto:youcefwork99@gmail.com">-->
         </form>
      </div>
      <center>
         <div class="shop">
            <a href="shop.php">Back to Shop site ...</a>
         </div>
      </center>
   </div>
   <!-- end section footer -->
   <script src="../javascript/indew-car.js"></script>
   <script src="../js/main.js"></script>
   <script src="../main-Acount.js"></script>
   <?php
   mysqli_close($connect);
   ?>
</body>

</html>