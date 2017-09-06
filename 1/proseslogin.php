<?php
session_start();
require_once 'koneksi.php';
$u = $_POST['u'];
$cekuser = mysql_query("SELECT * FROM user WHERE u = '$u' ");
$hasil = mysql_fetch_array($cekuser);
if (mysql_num_rows($cekuser) == 0) {
	echo "Username belum terdaftar <a href='login.php'>back</a>";
} else if ($_POST['u'] != $hasil['p']) {
	echo "Password salah <a href='login.php'>back</a>";
} else {
	$_SESSION['u'] = $hasil['u'];
	header('location:index.php');
}
