<?php
@include 'config.php';
?>

<?php
    include("config.php");
        $name=$_GET['name'];
        $price=$_GET['price'];
        $insert="insert into addcard(name,price) values('$name','$price')";
        $up=mysqli_query($connect,$insert);
        header('location:../php/index-Acount.php');    
?>