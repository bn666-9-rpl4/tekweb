<?php
	require '../koneksi.php';
	$q = mysqli_query($db, 'INSERT INTO guru VALUES(NULL, "'.$_POST['nip'].'", "'.$_POST['nama'].'", "'.$_POST['password'].'")') or die(mysqli_error($db));
	if ($q) {
		header('location:index.php');
	}
