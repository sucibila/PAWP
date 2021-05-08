<?php
include "conn.php";
if(isset($_POST['submit'])){
    $Nama = $_POST['name'];
    $Email  = $_POST['email'];
    $Password = MD5($_POST['password']);
    $Jenis_Kelamin = $_POST['gender'];
    $Tempat_Tinggal = $_POST['kota'];
    $sql = "INSERT INTO Data_Pembeli VALUES('$Nama','$Email','$Password','$Jenis_Kelamin','$Tempat_Tinggal')";
    $query_input = mysqli_query($con, $sql);
    if($query_input){
        header("location:signin.php");
    }else{
        header("location:signup.php?pesan=gagal");
    }
}
?>