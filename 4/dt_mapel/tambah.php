<?php
	require '../koneksi.php';
	$q = mysqli_query($db, 'INSERT INTO dt_mapel VALUES(NULL, "'.$_POST['materi'].'", "'.$_POST['deskripsi'].'", "", "'.$_POST['id_mapel'].'", "'.$_POST['id_guru'].'")') or die(mysqli_error($db));
	if ($q) {
		header('location:index.php');
	}
