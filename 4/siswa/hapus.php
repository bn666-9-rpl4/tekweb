<?php
	require '../koneksi.php';
	$q = mysqli_query($db,'DELETE FROM dt_siswa WHERE id ="'. $_GET['id'] .'"') or die(mysqli_error($db));
	if ($q) {
		header('location:index.php');
	}
