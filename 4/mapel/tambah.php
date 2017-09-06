<?php
	require '../koneksi.php';
	$q = mysqli_query($db, 'INSERT INTO mapel VALUES(NULL, "'.$_POST['nama'].'")') or die(mysqli_error($db));
	if ($q) {
		header('location:index.php');
	}
