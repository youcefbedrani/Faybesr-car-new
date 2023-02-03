<!DOCTYPE html>
<?php
@include '../Database/config.php';
// @include 'Database/select.php';
// @include 'Database/search.php';
?>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/shop.css">
   <title>Shop</title>
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Kufam:ital,wght@1,700&family=Oswald:wght@400;500&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
      .totosearch {
         color: black;
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
               <a href="index-Acount.php">
                  <span class="material-symbols-outlined">
                     shopping_cart
                  </span>
               </a>
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
                  <a href="../index-car.php">
                     <span>FUATERED PRODUCT</span>
                  </a>
               </li>
               <li>
                  <a href="../index-car.php">
                     <span>COLLECTION</span>
                  </a>
               </li>
               <li>
                  <a href="#">
                     <span>SHOP</span>
                  </a>
               </li>
               <li>
                  <a href="index-Contact.php">
                     <span>CONTACT</span>
                  </a>
               </li>
               <li>
                  <form action="../Database/search.php" method="POST">
                     <input type="text" class="totosearch" name="totosearch" placeholder="Search..." />
                     <input type="submit" name="tosearch" value="Search" id="tosearch">
                  </form>
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
   <div class="container_body">
      <div class="img-defintion">
         <img src="../image/Click-To-Buy-New .jpg" alt="imagehunday">
         <div class="text-defintion">
            <h2>Shop Car </h2>
            <p>Here You Finde all kinde of cars and all type</p>
         </div>
      </div>
      <div class="select_form">
         <h3>Select Here Type of Your Dream Car</h3>
         <form action="../Database/select.php" method="POST">
            <input type="text" name="year" placeholder="Year">
            <input type="text" name="km" placeholder="Mile">
            <input type="text" name="name" placeholder="Brand">
            <input type="text" name="price" placeholder="Price">
            <input type="text" name="location" placeholder="Location">
            <input type="text" name="transi" placeholder="Transition">
            <button type="submit" name="send" style="width: 271px;
            height: 33px;
            position: relative;
            background-color: #4587c5;
            font-family: var(--font-family3);
            color: white;
            border-radius: 12px;
            margin-top: 12px;
            right: 50%;
            /* left: 39%; */
            top: 60px;
            font-size: 20px;">
               Search
            </button>
         </form>
      </div>
      <br><br>
      <div class="carsforsell">
         <?php
         $query = "select * from product";
         $result = mysqli_query($connect, $query);
         while ($row = mysqli_fetch_array($result)) {

            echo <<<"hero"
            <div class="car 1">
            <div class="imgtext">
               <div class="forsell">
                  Sell
               </div>
               <img src="../Database/$row[image]" alt="audi1">
            </div>
            <div class="car_caractice">
               <div class="stars">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-regular fa-star"></i>
               </div>
               <h4>$row[price]</h4>
               <h2>$row[name]</h2>
               <div class="h3info">
                  <h3>$row[type_car]</h3>
                  <h3>$row[km] km</h3>
                  <h3>$row[transi]</h3>
                  <h3>sport</h3>
                  <h3>$row[color]</h3>
                  <h3>$row[year]</h3>
               </div>
               <p>$row[used] - $row[star]/10 - Laghouat</p>
               <div class="more">
              
               <a href='product-car.php? id= $row[id]' > show more  </a>
           
                  <i class="fa-solid fa-right"></i>
               </div>
            </div>
            </div>
         hero;
         }
         ?>
      </div>
   </div>
</body>

</html>