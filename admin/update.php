<?php 
 session_start();
 if($_SESSION['status']!="login"){
     header("location:../index.html");
 }
include '../koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$pembayaran = $_POST['pembayaran'];
$pmelalui = $_POST['pmelalui'];
$hp = $_POST['hp'];
$asal = $_POST['asal'];
$prodi = $_POST['prodi'];
$editoleh = $_POST['editoleh'];

mysql_query("UPDATE data SET nama='$nama', pembayaran='$pembayaran', pmelalui='$pmelalui', hp='$hp', asal='$asal', prodi='$prodi', editoleh='$editoleh' WHERE id='$id'");
 
header("location:index2.php?pesan=update");
?>