<?php
@include '../Database/config.php';
// @include 'Database/select.php';
// @include 'Database/search.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/shop.css">
   <title>Selected Product</title>
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Kufam:ital,wght@1,700&family=Oswald:wght@400;500&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
      center:first-of-type{
         position: relative;
         top: 287px;
         font-size: 30px;
         font-family: 'Kdam Thmor Pro';
         border: 1px solid black;
      }
      .erori{
         position: relative;
         top: 287px;
         font-size: 40px;
         font-family: 'Kdam Thmor Pro';
      }
      .car_selected{
         position: relative;
         top: 369px;
         width: 600px;
         left: 48px;
      }
      center img{
         width: 80%;
         position: relative;
         top: 294px;
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
               <a href="../php/index-Acount.php">
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
                  <a href="./index-car.php">
                     <span>HOME</span>
                  </a>
               </li>
               <li>
                  <a href="./index-car.php">
                     <span>FUATERED PRODUCT</span>
                  </a>
               </li>
               <li>
                  <a href="./index-car.php">
                     <span>COLLECTION</span>
                  </a>
               </li>
               <li>
                  <a href="#">
                     <span>SHOP</span>
                  </a>
               </li>
               <li>
                  <a href="index-Acount.php">
                     <span>CONTACT</span>
                  </a>
               </li>
               <li>
                  <form action="../database/search.php" method="POST">
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
   <br>
   <center><h2>Selected Product</h2></center>
   <br>
   <?php
      $query = "select * from product";
      $result = mysqli_query($connect, $query);
      if (isset($_POST['send'])) {
      $year = $_POST['year'];
      $km = $_POST['km'];
      $name = $_POST['name'];
      $price = $_POST['price'];
      $location = $_POST['location'];
      $transi = $_POST['transi'];
      echo  $year ;
      while ($row = mysqli_fetch_array($result)) {
         if ($year === $row['year'] || $km === $row['km'] || $name === $row['name'] || $price === $row['price'] || $location === $row['location'] || $transi === $row['transi'] ) {
   echo<<<"hero"
         <div class="car_selected">
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
                  <a href='../php/product-car.php? id= $row[id]' > show more  </a>
                  <i class="fa-solid fa-right"></i>
               </div>
            </div>
         </div>
         hero;
         }else{
   echo<<<"hero"
            <center><img src="../image/eror.jpg" alt="eror404"></center>
            <center><h2 class="erori">This Porduct Does not existe in Database</h2></center
         hero;
         }
      }
      }    
   ?>
</body>      

</html>

