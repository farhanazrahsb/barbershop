<?php
include ('../koneksi/koneksi.php');

$no =$_GET['no'];
$query = "DELETE from buyer where no='$no'";
mysql_query($query);
header("location: buyer.php");
?>