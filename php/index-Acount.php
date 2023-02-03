<!DOCTYPE html>
<?php
@include '../Database/config.php';
?>
<html>

<head>
   <link rel="stylesheet" href="../css/style-Acount.css">
   <link rel="stylesheet" href="../css/style-ca1r.css">
   <link rel="stylesheet" href="../css1/style.css">
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
         margin: -635px 0px 0px 336px;
         visibility: hidden;
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
         margin: 51px 0px 276px 643px;
      }

      h1 {
         position: absolute;
         display: inline;
         margin: -241px 0px 0px 445px;
      }

      .contain {
         margin: 43px auto;
      }
   </style>
</head>

<body>
   <img src="../image/audi2.jpeg" alt="car photo" style="width: 100%; height: 100%; position: absolute;">
   <section class="header">
      <div class="nav1" style="background-color: #80808036;">
         <a><i class="fa-solid fa-phone"></i></a>
         <p>+213551462476</p>
         <a><i class="fa-solid fa-envelope"></i></a>
         <p>shop@faybest.com</p>
         <a><i class="fa-solid fa-clock"></i></a>
         <p>Mon-Sun: 8:00am - 6:00pm</p>
      </div>
      <br>
      <div class="nav2" style="background-color: #80808036;">
         <img src="../image/1.png" alt="logo">
         <div class="list">
            <i><a href="../index-car.php">Home</a></i>
            <i><a href="../index-car.php">FUATERED PRODUCT</a></i>
            <i><a href="../index-car.php">COLLECTION</a></i>
            <i><a href="shop.php">SHOP</a></i>
            <i><a href="index-Contact.php">CONTACT</a></i>
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
         <a id="four" href="" style="background-color:#0A3250; color:white;">Order</a>
         <a id="five" href="../index-car.php">Product</a>
         <a id="six" href="shop.php">Shop</a>
         <a id="seven" href="index-Contact.php">Contact</a>
      </div>
      <div id="formone" class="form" style="display:none;">
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
            <label for=""></label><!-- 4 -->
            <input type="text" id="three" placeholder="City">
            <br>
            <label for=""></label><!-- 5 -->
            <input type="text" id="three" value="+213000000000" placeholder="Phone number">
            <br>
            <label for=""></label><!-- 6 -->
            <input type="text" id="three" value="0079999999029199682164" placeholder="Number of BaridiMob">
            <br>
            <label for=""></label><!-- 7 -->
            <input type="text" id="three" placeholder="Your sexe">
            <br>
            <input type="submit" value="Save change"><!-- 8-->
         </form>
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
            <input type="submit" value="Send"><!-- 8-->
         </form>
      </div>
      <?php
      include('../Database/config.php');
      $r = mysqli_query($connect, "select * from addcard");
      while ($row = mysqli_fetch_array($r)) {
         echo <<<"hero"
            <main>
                  <table class="tab" >
                     <thead>
                        <tr>
                           <th>product name</th>
                           <th>product price</th>
                           <th>delete product</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>$row[name]</td>
                           <td>$row[price]</td>
                           <td><a class="hreffordel" href="../Database/del_card.php ? id=$row[id]">Delete</a></td>
                        </tr>
                     </tbody>
                  </table>
            </main>
            hero;
      }
      ?>
      <center>
         <div class="shop">
            <a href="shop.php">Back to Shop site ...</a>
         </div>
      </center>
   </div>
   <script src="../main-Acount.js"></script>
   <?php
   mysqli_close($connect);
   ?>
</body>

</html>