<?php 
include"../include/connection.php";
$login=mysqli_query($conn,"select * from admin where username = '$_POST[username]' and password='$_POST[password]'");
if (mysqli_num_rows($login)) {
	$data=mysqli_fetch_array($login);
	session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
{

$_SESSION['username']=$data['username'];
	$_SESSION['password']=$data['password'];
	header("location:server.php?module=dashboard");
//Place other codes here to execute when captcha is passed
}
else
{
die("Wrong Captcha Code!");
}
	

}else{
	print "<script> alert('salah,cek lagi!'); location.href='index.php';</script>";

}
 ?>
