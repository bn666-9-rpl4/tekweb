<?php
	require '../koneksi.php';
	$q = mysqli_query($db, 'UPDATE dt_siswa SET nis="'.$_POST['nis'].'", nama="'.$_POST['nama'].'", id_kelas="'.$_POST['id_kelas'].'" WHERE id="'.$_POST['id'].'"') or die(mysqli_error($db));
	if ($q) {
		header('location:index.php');
	}
