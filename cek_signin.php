<?php 
session_start();
include 'conn.php';
$Email = $_POST['email'];
$Password = MD5($_POST['password']);
$data = mysqli_query($con,"SELECT * FROM Data_Pembeli WHERE email='$Email' AND password='$Password'");
$cek = mysqli_num_rows($data);
if($cek > 0){
	$_SESSION['email'] = $Email;
	$_SESSION['status'] = "login";
	header("location:beranda.php");
}else{
	header("location:signin.php?pesan=gagal");
}
?>