<?php
include('config.php');
$id=$_GET['id'];
$del=mysqli_query($connect,"delete from product where id=$id");
header('location:allproducts.php');
?>