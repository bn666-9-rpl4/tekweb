<?php
require 'koneksi.php';
$result = mysql_query("INSERT INTO user VALUES (null, '".$_POST['u']."', '".$_POST['p']."')", $db) or die(mysql_error());
header('location:login.php');