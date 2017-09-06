<?php
	require '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../style.css">
</head>
<body>
	<table border="1px" class="nav">
		<tr>
			<td><a href="../guru/">Guru</a></td>
			<td><a href="index.php">Kelas</a></td>
			<td><a href="../mapel/">Mapel</a></td>
			<td><a href="../siswa/">Siswa</a></td>
			<td><a href="../dt_mapel/">dt_mapel</a></td>
		</tr>
	</table>
	<center>
		<form action="tambah.php" method="post">
			<table>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>
						<input type="submit">
						<input type="reset">
					</td>
				</tr>
			</table>
		</form>
	</center>
	<table border="1px" id="tampil">
		<tr>
			<th>Nama</th>
			<th>Aksi</th>
		</tr>
		<?php
			$q = mysqli_query($db, 'SELECT * FROM dt_kelas');
			while ($row = mysqli_fetch_assoc($q)) {
		?>
			<tr>
				<td><?=$row['nama']?></td>
				<td>
					<a href="hapus.php?id=<?=$row['id']?>">Hapus</a>
					<a href="edit.php?id=<?=$row['id']?>&nama=<?=$row['nama']?>">Edit</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>
