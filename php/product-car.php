<!DOCTYPE html>
<?php
@include '../Database/config.php';
         $id=$_GET['id'];
         $query="select * from product where id=$id";
         $result=mysqli_query($connect,$query);
         $data=mysqli_fetch_array($result);
?>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Product</title>
   <link rel="stylesheet" href="../css/pdosuct-style.css">
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
   <style>
      .carinfo {
         display: grid;
         grid-template-columns: 870px 450px;
         grid-template-rows: 1151px 870px;
         position: relative;
         top: 78px;
         margin-left: 260px;
         font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      }

      .car_image_desc {
         position: relative;
         border: 1px solid black;
         width: 870px;
         height: 1151px;
         padding: 12px;
      }

      .detial {
         position: relative;
         border: 1px solid black;
         width: 450px;
         height: 1151px;
         padding: 12px;
      }

      .quest i {
         position: relative;
         font-size: 18px;
      }

      .quest {
         position: relative;
         top: 70px;
      }

      .imgcar img {
         width: 843px;
         height: 411px;
      }

      .headcar #loc {
         position: relative;
         top: 1px;
         left: -317px;
      }

      .headcar #star {
         position: relative;
         top: -41px;
         right: -316px;
         color: #e4b31c;
      }

      .Addtocart {
         position: relative;
         top: 164px;
      }

      .Addtocart button {
         border: 0px;
         width: 100px;
         height: 50px;
         border-radius: 7px;
         background-color: #b4b4db;
      }

      .decsription {
         background-color: #eee;
         width: 840px;
         height: 606px;
         margin-top: 5px;
         padding: 16px;
         font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
            <div id="slect_acount">
               <select name="">
                  <option value=""><a href="">Acount</a></option>
                  <option value=""><a href="">Sing-in</a></option>
                  <option value=""><a href="">Sing-up</a></option>
               </select>
            </div>
            <div class="icon">
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
                  <a href="">
                     <span>HOME</span>
                  </a>
               </li>
               <li>
                  <a href="">
                     <span>FUATERED PRODUCT</span>
                  </a>
               </li>
               <li>
                  <a href="">
                     <span>COLLECTION</span>
                  </a>
               </li>
               <li>
                  <a href="">
                     <span>SHOP</span>
                  </a>
               </li>
               <li>
                  <a href="">
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
   <div class="product">
      <div class="sectionforcarp">
         <img src="./image/image-panoama.jpeg" alt="">
         <h3>Car Detail</h3>
         <h5>Home / Car Detail</h5>
      </div>
      <center>

      <?php 
echo<<<"hero"
         <div class="carinfo">
            <div class="car_image_desc">
            <div class="headcar">
            <h2 style="float: left">$data[name]</h2><br><br>
            <i id="loc" class="fa-solid fa-location-dot"></i>
            <p style="float: left">$data[location]</p>
            <h1 style="float: right; margin-top:-40px; color:red;">$data[price]</h1><br><br>
            <i id="star" class="fa-solid fa-star"></i>
            <i id="star" class="fa-solid fa-star"></i>
            <i id="star" class="fa-solid fa-star"></i>
            <i id="star" class="fa-regular fa-star"></i>
            <h5 style="float: right; margin-top:-40px;">($data[star]/10)</h5>
            </div>
            <div class="imgcar">
               <img src="../Database/$data[image]" alt="">
            </div>
            <div class="decsription">
               <h2 style="float: left;">Description</h2> <br> <br>
               <p style="font-size:22px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra a. Aliquam pellentesque nibh et nibh feugiat gravida. Maecenas ultricies, diam vitae semper placerat, velit risus accumsan nisl, eget tempor lacus est vel nunc. Proin accumsan elit sed neque euismod fringilla. Curabitur lobortis nunc velit, et fermentum urna dapibus non. Vivamus magna lorem, elementum id gravida ac, laoreet tristique augue. Maecenas dictum lacus eu nunc porttitor, ut hendrerit arcu efficitur.
                  Aliquam ultricies nunc porta metus interdum mollis. Donec porttitor libero augue, vehicula tincidunt lectus placerat a. Sed tincidunt dolor non sem dictum dignissim. Nulla vulputate orci felis, ac ornare purus ultricies a. Fusce euismod magna orci, sit amet aliquam turpis dignissim ac. In at tortor at ligula pharetra sollicitudin. Sed tincidunt, purus eget laoreet elementum, felis est pharetra ante, tincidunt feugiat libero enim sed risus. Sed at leo sit amet mi bibendum aliquam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent cursus varius odio, non faucibus dui. Nunc vehicula lectus sed velit suscipit aliquam vitae eu ipsum. adipiscing elit.</p>
            </div>
         </div>
         <div class="detial">
            <h1 style="margin-bottom:12px;">Refine Your Search</h1>
            <h2 style="float: left; color:#3c3b3b; font-size:23px;">Name :</h2><br><br>
            <p style="float: right; color: #372c2c; font-size: 23px;position: relative;top: -34px;">$data[name]</p>
            <hr>
            <h2 style="float: left; color:#3c3b3b; font-size:23px;">price :</h2><br><br>
            <p style="float: right; color: #372c2c; font-size: 23px;position: relative;top: -34px;">$data[price]</p>
            <hr>
            <h2 style="float: left; color:#3c3b3b; font-size:23px;">Type Car :</h2><br><br>
            <p style="float: right; color: #372c2c; font-size: 23px;position: relative;top: -34px;">$data[type_car]</p>
            <hr>
            <h2 style="float: left; color:#3c3b3b; font-size:23px;">Mail :</h2><br><br>
            <p style="float: right; color: #372c2c; font-size: 23px;position: relative;top: -34px;">$data[km]</p>
            <hr>
            <h2 style="float: left; color:#3c3b3b; font-size:23px;">Transition :</h2><br><br>
            <p style="float: right; color: #372c2c; font-size: 23px;position: relative;top: -34px;">$data[transi]</p>
            <hr>
            <h2 style="float: left; color:#3c3b3b; font-size:23px;">Color :</h2><br><br>
            <p style="float: right; color: #372c2c; font-size: 23px;position: relative;top: -34px;">$data[color]</p>
            <hr>
            <h2 style="float: left; color:#3c3b3b; font-size:23px;">Year :</h2><br><br>
            <p style="float: right; color: #372c2c; font-size: 23px;position: relative;top: -34px;">$data[year]</p>
            <hr>
            <h2 style="float: left; color:#3c3b3b; font-size:23px;">Utulisation :</h2><br><br>
            <p style="float: right; color: #372c2c; font-size: 23px;position: relative;top: -34px;">$data[used]</p>
            <hr>
            
            <h2 style="float: left; color:#3c3b3b; font-size:23px;">star:</h2><br><br>
            <p style="float: right; color: #372c2c; font-size: 23px;position: relative;top: -34px;">$data[star]/10</p>
            <hr>
            <h2 style="float: left; color:#3c3b3b; font-size:23px;">Locatoin :</h2><br><br>
            <p style="float: right; color: #372c2c; font-size: 23px;position: relative;top: -34px;">$data[location]</p>
            <br>
            <br>
            <br>
            <hr>
            <div class="quest">
               <h2>Get a Question?</h2>
               <p>20/F Green Road, Dhanmondi</p>
               <p>info@themevessel.com</p>
               <p>+0477 85x6 552</p>
               <br>
               <i id="iconp" class="fa-brands fa-facebook"></i>
               <i id="iconp" class="fa-brands fa-github"></i>
               <i id="iconp" class="fa-brands fa-linkedin-in"></i>
               <i id="iconp" class="fa-brands fa-twitter"></i>
            </div>
            <br>
            <hr style="position: relative;top: 100px;">
            <br>
            <div class="Addtocart">
            <a href='../Database/insert_card.php? name= $data[name] && price= $data[price]' > add to card </a>
            </div>
         </div>
         </div>
         hero;
      ?>
         </div>
      </center>
   </div>
</body>

</html>