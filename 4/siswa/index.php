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
			<td><a href="../kelas/">Kelas</a></td>
			<td><a href="../mapel/">Mapel</a></td>
			<td><a href="index.php">Siswa</a></td>
			<td><a href="../dt_mapel/">dt_mapel</a></td>
		</tr>
	</table>
	<center>
		<form action="tambah.php" method="post">
			<table>
				<tr>
					<td>NIS</td>
					<td>:</td>
					<td><input type="text" name="nis"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td>:</td>
					<td>
						<select name="id_kelas">
							<?php
								$res = mysqli_query($db, "SELECT * FROM dt_kelas");
								while ( $row = mysqli_fetch_assoc($res) ) {
									?>
										<option value="<?=$row['id']?>"><?=$row['nama']?></option>
									<?php
								}
							?>
						</select>
					</td>
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
			<th>NIS</th>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Aksi</th>
		</tr>
		<?php
			$q = mysqli_query($db, 'SELECT dt_siswa.*, dt_kelas.nama AS kelas FROM dt_siswa INNER JOIN dt_kelas ON dt_siswa.id_kelas = dt_kelas.id');
			while ($row = mysqli_fetch_assoc($q)) {
		?>
			<tr>
				<td><?=$row['nis']?></td>
				<td><?=$row['nama']?></td>
				<td><?=$row['kelas']?></td>
				<td>
					<a href="hapus.php?id=<?=$row['id']?>">Hapus</a>
					<a href="edit.php?id=<?=$row['id']?>&nis=<?=$row['nis']?>&nama=<?=$row['nama']?>&id_kelas=<?=$row['id_kelas']?>">Edit</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>
