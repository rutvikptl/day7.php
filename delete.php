<?php


$connection = mysqli_connect("localhost","root","","db_internship");
 
 $id = $_GET['deleteid'];

 $q=mysqli_query($connection,"update tbl_user set is_delete =2 where user_id='{$id}'") or die("error".mysqli_error($connection));

 if ($q) {
 	echo "<script>alert('record deleted');window.location='3-table.php';</script>";
 }