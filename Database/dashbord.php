<?php
include ('config.php');

if(isset($_POST['add-product'])){
    $name=$_POST['name'];
    $price=$_POST['price'];
    $type_car=$_POST['type_car'];
    $km=$_POST['km'];
    $transi=$_POST['transi'];
    $color=$_POST['color'];
    $year=$_POST['year'];
    $used=$_POST['used'];
    $star=$_POST['star'];
    $location=$_POST['location'];
    
    $img=$_FILES['image'];
    $IMAGE_LOCATION  =$img['tmp_name'];//الصورة والصيغة الخاص به 
    $IMAGE_NAME      =$img['name'];//الصورة و الاسم الخاص بها
    $IMAGE_up        ="./insert_image/".$IMAGE_NAME;// المجلد الذي سيتم وضع الصورة فيه
    
    $insert="insert into product(name,price,type_car,km,transi,image,color,year,used,star,location) values('$name','$price','$type_car','$km','$transi','$IMAGE_up','$color','$year','$used','$star','$location')";

    mysqli_query($connect,$insert);
    if(move_uploaded_file($IMAGE_LOCATION,$IMAGE_up)){
        echo "<script>alert('تم رفع المنتج بنجاح')</script>";
        header('location:dashbord.php');
    }else{
        echo "<script>alert('حدث مشكلة لم يتم رفع المنتج')</script>";
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <style>
        table{
        width:100%;      
    }
        thead{
            background-color:#3498DB;
            padding:10px;
        }
        tbody{
            background-color:white;
        }
        td{
            padding:10px;
        }
        th{
            padding:10px;
        }
        .container {
    padding-left: 15px;
    padding-right: 15px;
    margin-left: auto;
    margin-right: auto;
  }
  /* ________________________________________________ */
  .header{
    background-color: #9b9696;
    width: 100%;
    height:40px;
  }
  .container {
    text-align: center;
  }
  .container h3{
    padding-top:10px;

    }
    .blog{
        width: 300px;
        height: 400px;
        /* border: 2px solid red; */
        margin: 50px auto 0;
        box-shadow: 1px 1px 10px silver;
        text-align: center;
    }
    input{
        text-align: center;

    }
    .blog h3{
        margin: 10px;
    }
    .add-blog{
        border: none;
        padding: 10px;
        background-color: #9696ff;
        margin: 5px;
    }
    .del-blog{
        border: none;
        padding: 10px;
        background-color: #ec504a;
        margin: 5px;
    }
    .add-img{
      border: none;
      padding: 10px;
      background-color: #f28c88;;
      margin: 5px;
    }
    </style>
</head>
<body>
    <center>
    <h2>Dashbord</h2>
    <a href="../index-car.php" style="font-size:"30px;">GO TO SEE WEB SITE FROM HERE >> </a>

    </center>
    <div class="dash">

      <center>  <h3>Add product</h3> </center> 
    <form action="" method="POST" enctype="multipart/form-data">
    <table >
        <thead>
            <tr>
                <th>name</th>
                <th>price</th>
                <th>type_car</th>
                <th>km</th>
                <th>transi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" name="name"  ></td>
                <td><input type="text" name="price"  ></td>
                <td><input type="text" name="type_car"  ></td>
                <td><input type="text" name="km"  ></td>
                <td><input type="text" name="transi"  ></td>
            </tr>
        </tbody>
    </table>
    <table >
        <thead>
            <tr>
                <th>image</th>
                <th>color</th>
                <th>year</th>
                <th>used</th>
                <th>star</th>
                <th>location</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input type="file" id="file" name="image" style="display:none"><br>
                    <label for="file">اختيار صورة</label>
                </td>
                <td><input type="text" name="color"  ></td>
                <td><input type="text" name="year"  ></td>
                <td><input type="text" name="used"  ></td>
                <td><input type="text" name="star"  ></td>
                <td><input type="text" name="location"  ></td>
            </tr>
        </tbody>
        <tfoot><tr><td><button type="submit" name="add-product" >add</button></td></tr></tfoot>
    </table>
    </form>
    <hr>
    <center><h3><a href="allproducts.php">show all products</a></h3></center>
    <div>
    <?php
    @include 'config.php';

    if (isset($_POST['addblog'])) {
     $name=$_POST['name'];
     $Describetion=$_POST['Describetion'];
     $Date=$_POST['Date'];

     $img=$_FILES['image'];
     $IMAGE_LOCATION  =$img['tmp_name'];//الصورة والصيغة الخاص به 
     $IMAGE_NAME      =$img['name'];//الصورة و الاسم الخاص بها
     $IMAGE_up        ="/insert_image_art/".$IMAGE_NAME;// المجلد الذي سيتم وضع الصورة فيه
     
     $insert="insert into blog(name,Describetion,Date,image) values('$name','$Describetion','$Date','$IMAGE_up')";
 
     mysqli_query($connect,$insert);
     if(move_uploaded_file($IMAGE_LOCATION,$IMAGE_up)){
         echo "<script>alert('تم رفع المقالة بنجاح')</script>";
         header('location:dashbord.php');
     }else{
         echo "<script>alert('حدث مشكلة لم يتم رفع المقالة')</script>";
     }
     
    };
    
?>
    <div class="header">
        <div class="container">
        <h3>Articles section</h3>
        </div> 
    </div>
    <div class="blog"><br>
        <div class="blog-one">
          <form action=""  method="POST" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="ادخل عنوان المقالة"><br><br>
            <input type="text" name="Describetion" placeholder="ادخل وصف قصير للمقالة"><br><br>
            <input type="file" name="image" id="file"  style="display:none"><br>
            <label for="file" class="add-img">اختيار صورة</label><br><br>
            <input type="date" name="Date"><br><br>
            <button type="submit" name="addblog" class="add-blog">اضافة مقال</button>
          </form>
        </div>
       
    </div>
    </div>
    </div>
</body>
</html>