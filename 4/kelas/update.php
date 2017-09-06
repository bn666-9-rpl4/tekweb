<?php
	require '../koneksi.php';
	$q = mysqli_query($db, 'UPDATE dt_kelas SET nama="'.$_POST['nama'].'" WHERE id="'.$_POST['id'].'"') or die(mysqli_error($db));
	if ($q) {
		header('location:index.php');
	}
