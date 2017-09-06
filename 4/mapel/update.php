<?php
	require '../koneksi.php';
	$q = mysqli_query($db, 'UPDATE mapel SET nama="'.$_POST['nama'].'" WHERE id="'.$_POST['id'].'"') or die(mysqli_error($db));
	if ($q) {
		header('location:index.php');
	}
