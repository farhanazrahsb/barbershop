<?php
include ('../koneksi/koneksi.php');

$no =$_GET['no'];
$query = "DELETE from produk where no='$no'";
mysql_query($query);
header("location: product.php");
?>