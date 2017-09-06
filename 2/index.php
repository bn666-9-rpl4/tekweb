<?php
session_start();
if (!isset($_SESSION['u'])){
	header('location:login.php');
} else {
	?>
		<div align="center">
			Selamat Datang <b><?=$_SESSION['u']?></b> <a href="logout.php">Logout</a>
		</div>
	<?php
}
?>
