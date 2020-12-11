<?php
//Create database connection
$mysqli = mysqli_connect("localhost","root","","lottery_baby");

if (!$mysqli) {

die("Connection error: " . mysqli_connect_error());

}
?>