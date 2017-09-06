<?php
	require '../koneksi.php';
	$q = mysqli_query($db, 'UPDATE dt_mapel SET materi="'.$_POST['materi'].'", deskripsi="'.$_POST['deskripsi'].'", id_mapel="'.$_POST['id_mapel'].'", id_guru="'.$_POST['id_guru'].'" WHERE id="'.$_POST['id'].'"') or die(mysqli_error($db));
	if ($q) {
		header('location:index.php');
	}
