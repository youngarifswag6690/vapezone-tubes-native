<?php
include "../include/connection.php";
$module=$_GET['module'];
$act=$_GET['act'];
if ($module=='product' and $act=='input') {
	$set = true;
$msg = "";
//tentukan variabel file yg diupload dan tipe file
$tipe_file	= $_FILES['image']['type'];
$lokasi_file = $_FILES['image']['tmp_name'];
$nama_file	= $_FILES['image']['name'];
$save_file =move_uploaded_file($lokasi_file,"../image/$nama_file");

if(empty($lokasi_file))
{
$set=false;
$msg= $msg. 'Upload gagal, Anda Lupa Mengambil Gambar..';
}
else
{
 if ($tipe_file != "image/gif" and
$tipe_file != "image/jpeg" and
$tipe_file != "image/jpg" and
$tipe_file != "image/pjpeg" and
$tipe_file != "image/png")
{
$set=false;
$msg= $msg. 'Upload gagal, tipe file harus image..';
}
else
{
isset($save_file);
}
 if($save_file)
{
chmod("../image/$nama_file", 0777);
}
else
{
$msg = $msg.'Upload Image gagal..';
$set =	false;
}
}
		if(isset($_POST['submit'])&&$set){
			
 	
			$product_name	= $_POST['product_name'];
			$description	= $_POST['description'];
			$price			= $_POST['price'];
			$category		= $_POST['category'];
			// $image		= $_POST['image'];

			$q=mysqli_query($conn,"INSERT into product(product_name,description,price,category,image) values ('$product_name','$description','$price','$category','$nama_file')");
			if ($q) {
				header('location:server.php?module=product&act');
			}
		}
	}
if($module=='product' and $act=='editproduct') {
	$id_product		= $_POST['id'];
	$set = true;
$msg = "";

//tentukan variabel file yg diupload dan tipe file
$tipe_file	= $_FILES['image']['type'];
$lokasi_file = $_FILES['image']['tmp_name'];
$nama_file	= $_FILES['image']['name'];
$save_file =move_uploaded_file($lokasi_file,"../image/$nama_file");

if(empty($lokasi_file))
{
isset($set);
}
else
{
//tentukan tipe file harus image 
	if ($tipe_file != "image/gif" and
$tipe_file != "image/jpeg" and
$tipe_file != "image/jpg" and
$tipe_file != "image/pjpeg" and
$tipe_file != "image/png")
{
$set=false;
$msg= $msg. 'Upload gagal, tipe file harus image..';
}
else
{
$unlink=mysqli_query($conn, "select * from product where id_product='$id_product'");
$CekLink=mysqli_fetch_array($unlink); 
if(!empty($CekLink[5]))
{
unlink("../image/$CekLink[5]");
}
isset($save_file);
}

//replace di server 
if($save_file)
{
chmod("../image/$nama_file", 0777);
}
else
{
$msg = $msg.'Upload Image gagal..';
$set =	false;
}
}

		if(isset($_POST['submit'] )&&$set){

			
 			$id_product		= $_POST['id'];
			$product_name	= $_POST['name'];
			$description	= $_POST['des'];
			$price			= $_POST['pr'];
			$category		= $_POST['cat'];
			// $image		= $_POST['image']
			// ;
			if(empty($lokasi_file))
{
mysqli_query($conn, "update product set 
	product_name='$product_name' , description='$description', price = '$price' , category = '$category' where id_product = '$id_product'");}
else{mysqli_query($conn, "update product set product_name='$product_name' , description='$description', price = '$price' , category = '$category',image='$nama_file' where id_product = '$id_product' ");
}
$msg= $msg.'Update Galeri Sukses..'; print "<meta http-equiv=\"refresh\"
content=\"1;URL=server.php?module=product\">";
}
echo "$msg";
}

			// $r = "UPDATE product set product_name='$product_name' , description='$description', price = '$price' , category = '$category' where id_product = '$id_product'";
			// $q=mysqli_query($conn, $r);
			// if ($q) {
			// header('location:server.php?module=product&act');
			// }else{
			// 	echo "error ".$q;
			// }
		
	
if ($module=='product' and $act=='hapus') {
	$sql = "DELETE from product where id_product='$_GET[id]'";
	$f = mysqli_query($conn, $sql);
	if ($f) {
		header('location:server.php?module=product&act');
	}
}
if ($module=='profile' and $act=='update'){
	$id_profile	= $_POST['id_profile'];
	$set = true;
$msg = "";

//tentukan variabel file yg diupload dan tipe file
$tipe_file	= $_FILES['image']['type'];
$lokasi_file = $_FILES['image']['tmp_name'];
$nama_file	= $_FILES['image']['name'];
$save_file =move_uploaded_file($lokasi_file,"../image/$nama_file");

if(empty($lokasi_file))
{
isset($set);
}
else
{
//tentukan tipe file harus image 
	if ($tipe_file != "image/gif" and
$tipe_file != "image/jpeg" and
$tipe_file != "image/jpg" and
$tipe_file != "image/pjpeg" and
$tipe_file != "image/png")
{
$set=false;
$msg= $msg. 'Upload gagal, tipe file harus image..';
}
else
{
$unlink=mysqli_query($conn, "select * from profile where id_profile='$id_profile'");
$CekLink=mysqli_fetch_array($unlink); 
if(!empty($CekLink[4]))
{
unlink("../image/$CekLink[4]");
}
isset($save_file);
}

//replace di server 
if($save_file)
{
chmod("../image/$nama_file", 0777);
}
else
{
$msg = $msg.'Upload Image gagal..';
$set =	false;
}
}
if(isset($_POST['submit'] )&&$set){

			
 			$id_profile	= $_POST['id_profile'];
			$nama_toko	= $_POST['nama_toko'];
			$contact	= $_POST['contact'];
			$address		= $_POST['address'];
			$description	= $_POST['description'];
			// $image		= $_POST['image']
			// ;
			if(empty($lokasi_file))
{
mysqli_query($conn, "update profile set 
	nama_toko='$nama_toko' , address='$address', contact = '$contact' , description = '$description' where id_toko = '$id_profile'");}
else{mysqli_query($conn, "update profile set nama_toko='$nama_toko' , address='$address', contact= '$contact' ,image='$nama_file' , description = '$description' where id_toko = '$id_profile' ");
}
$msg= $msg.'Update Galeri Sukses..'; print "<meta http-equiv=\"refresh\"
content=\"1;URL=server.php?module=profile\">";
}
echo "$msg";
}
		?>
			
 
			