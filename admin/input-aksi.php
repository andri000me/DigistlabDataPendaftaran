<?php 
session_start();
if($_SESSION['status']!="login"){
    header("location:../index.html");
}
include '../koneksi.php';
$nama = $_POST['nama'];
$pembayaran = $_POST['pembayaran'];
$pmelalui = $_POST['pmelalui'];
$hp = $_POST['hp'];
$asal = $_POST['asal'];
$prodi = $_POST['prodi'];
$editoleh = $_POST['editoleh'];

mysql_query("INSERT INTO data VALUES('','$nama','$pembayaran','$pmelalui','$hp','$asal','$prodi','$editoleh')");
 
header("location:index2.php?pesan=input");
?>