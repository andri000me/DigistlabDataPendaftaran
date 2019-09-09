<?php 
session_start();
if($_SESSION['status']!="login"){
    header("location:../index.html");
}

include '../koneksi.php';
$id = $_GET['id'];
mysql_query("DELETE FROM data WHERE id='$id'")or die(mysql_error());
 
header("location:index2.php?pesan=hapus");
?>