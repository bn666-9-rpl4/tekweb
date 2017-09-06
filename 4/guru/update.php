<?php
	require '../koneksi.php';
	$q = mysqli_query($db, 'UPDATE guru SET nip="'.$_POST['nip'].'", nama="'.$_POST['nama'].'", password="'.$_POST['password'].'" WHERE id="'.$_POST['id'].'"') or die(mysqli_error($db));
	if ($q) {
		header('location:index.php');
	}
