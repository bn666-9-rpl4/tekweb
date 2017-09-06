<?php
	require '../koneksi.php';
	$q = mysqli_query($db,'DELETE FROM dt_kelas WHERE id ="'. $_GET['id'] .'"') or die(mysqli_error($db));
	if ($q) {
		header('location:index.php');
	}
