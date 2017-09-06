<?php
	require '../koneksi.php';
	$q = mysqli_query($db, 'INSERT INTO dt_siswa VALUES(NULL, "'.$_POST['nis'].'", "'.$_POST['nama'].'" , '.$_POST['id_kelas'].')') or die(mysqli_error($db));
	if ($q) {
		header('location:index.php');
	}
