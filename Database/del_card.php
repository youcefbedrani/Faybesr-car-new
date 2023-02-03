<?php
include('config.php');
$id=$_GET['id'];
$del=mysqli_query($connect,"delete from addcard where id=$id");
header('location:../php/index-Acount.php');
?>