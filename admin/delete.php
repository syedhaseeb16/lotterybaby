<?php
include('database.php');
$id=$_GET['id'];
$mysqli->query("delete from employee_basics where id=$id");
unlink("profile_images/".$id.".jpg");
header('location:dashboard.php');
?>