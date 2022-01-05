<?php
include ('../koneksi/koneksi.php');

$no =$_GET['no'];
$query = "DELETE from price where no='$no'";
mysql_query($query);
header("location: price.php");
?>