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
			<td><a href="index.php">Guru</a></td>
			<td><a href="../kelas/">Kelas</a></td>
			<td><a href="../mapel/">Mapel</a></td>
			<td><a href="../siswa/">Siswa</a></td>
			<td><a href="../dt_mapel/">dt_mapel</a></td>
		</tr>
	</table>
	<center>
		<form action="tambah.php" method="post">
			<table>
				<tr>
					<td>NIP</td>
					<td>:</td>
					<td><input type="text" name="nip"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input type="password" name="password"></td>
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
		<caption>Guru</caption>
		<tr>
			<th>NIP</th>
			<th>Nama</th>
			<th>Aksi</th>
		</tr>
		<?php
			$q = mysqli_query($db, 'SELECT * FROM guru');
			while ($row = mysqli_fetch_assoc($q)) {
		?>
			<tr>
				<td><?=$row['nip']?></td>
				<td><?=$row['nama']?></td>
				<td>
					<a href="hapus.php?id=<?=$row['id']?>">Hapus</a>
					<a href="edit.php?id=<?=$row['id']?>&nip=<?=$row['nip']?>&nama=<?=$row['nama']?>">Edit</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>
