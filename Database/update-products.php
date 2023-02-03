<?php
include('config.php');
$id=$_GET['id'];
$update=mysqli_query($connect,"select * from product where id=$id");
$data=mysqli_fetch_array($update);

if(isset($_POST['up-product'])){
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
    
    $insert="update product set name='$name',price='$price',type_car='$type_car',km='$km',transi='$transi',image='$IMAGE_up',color='$color',year='$year',used='$used',star='$star',location='$location'";
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
    <title>Dashbord |update</title>
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
    </style>
</head>
<body>
<center>
    <h2>Dashbord</h2>
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
                <td><input type="text" name="name"  value="<?php echo $data['name'] ?>"></td>
                <td><input type="text" name="price"  value="<?php echo $data['price'] ?>"></td>
                <td><input type="text" name="type_car"  value="<?php echo $data['type_car'] ?>"></td>
                <td><input type="text" name="km"  value="<?php echo $data['km'] ?>"></td>
                <td><input type="text" name="transi"  value="<?php echo $data['transi'] ?>"></td>
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
                <td><input type="text" name="color"  value="<?php echo $data['color'] ?>"></td>
                <td><input type="text" name="year"  value="<?php echo $data['year'] ?>"></td>
                <td><input type="text" name="used"  value="<?php echo $data['used'] ?>"></td>
                <td><input type="text" name="star"  value="<?php echo $data['star'] ?>"></td>
                <td><input type="text" name="location"  value="<?php echo $data['location'] ?>"></td>
            </tr>
        </tbody>
        <tfoot><tr><td><button type="submit" name="up-product" >update</button></td></tr></tfoot>
    </table>
    </form>
    </div>
</body>
</html>