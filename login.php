<?php 
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysql_query("select * from admin where username='$username' and password='$password'");
$cek = mysql_num_rows($query);
echo $cek;
if($cek == 1)
{
    $_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
    header("location:admin/index.php");
}else
{
    header("location:salah.php");
}
?>