<?php
	require '../koneksi.php';
	$q = mysqli_query($db,'DELETE FROM guru WHERE id ="'. $_GET['id'] .'"') or die(mysqli_error($db));
	if ($q) {
		header('location:index.php');
	}
