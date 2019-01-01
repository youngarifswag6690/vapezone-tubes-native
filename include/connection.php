<?php 
$servername='localhost';
$username='root';
$password='';
$dbname='db_vape';
$conn=mysqli_connect($servername,$username,$password) or die (mysqli_error());
$database=mysqli_select_db($conn,$dbname) or die ("database tidak ditemukan");

 ?>