<?php
include ('../koneksi/koneksi.php');

$no =$_GET['no'];
$query = "DELETE from gallery where no='$no'";
mysql_query($query);
header("location: gallery.php");
?>