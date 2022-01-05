<?php
require('koneksi/koneksi.php');
session_start();
if (isset($_POST['email'])){
$email=$_POST['email'];
$password=$_POST['password'];
 
// untuk keamanan
$email = stripslashes($email);
$password = stripslashes($password);
$email = mysql_real_escape_string($email);
$password = mysql_real_escape_string($password);
 
$sql="SELECT * FROM admin WHERE email='$email' and password='$password'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
 
if($count==1){
	$_SESSION['email'] = $email;
echo "<script>alert('Login Berhasil')</script>";
echo "<script>window.location = 'admin/beranda.php';</script>";
}
else {
echo "<script>alert('Login Gagal')</script>";
echo "<meta http-equiv='refresh' content='1 url=login.php'>";
}
}
?>