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
			<td><a href="../kelas">Kelas</a></td>
			<td><a href="../mapel/">Mapel</a></td>
			<td><a href="../siswa/">Siswa</a></td>
			<td><a href="index.php">dt_mapel</a></td>
		</tr>
	</table>
	<center>
		<form action="tambah.php" method="post">
			<table>
				<tr>
					<td>Guru</td>
					<td>:</td>
					<td>
						<select name="id_guru">
							<?php
								$res = mysqli_query($db, "SELECT * FROM guru");
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
					<td>Mapel</td>
					<td>:</td>
					<td>
						<select name="id_mapel">
							<?php
								$res = mysqli_query($db, "SELECT * FROM mapel");
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
					<td>Deskripsi</td>
					<td>:</td>
					<td><textarea name="deskripsi"></textarea></td>
				</tr>
				<tr>
					<td>Materi</td>
					<td>:</td>
					<td><input type="text" name="materi"></td>
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
			<th>Guru</th>
			<th>Mapel</th>
			<th>Deskripsi</th>
			<th>Materi</th>
			<th>Aksi</th>
		</tr>
		<?php
			$q = mysqli_query($db, 'SELECT dt_mapel.*, guru.id AS id_guru, guru.nama AS guru_nama, mapel.id AS id_mapel, mapel.nama AS mapel_nama FROM dt_mapel INNER JOIN mapel ON mapel.id = dt_mapel.id_mapel INNER JOIN guru ON guru.id = dt_mapel.id_guru');
			while ($row = mysqli_fetch_assoc($q)) {
		?>
			<tr>
				<td><?=$row['guru_nama']?></td>
				<td><?=$row['mapel_nama']?></td>
				<td><?=$row['deskripsi']?></td>
				<td><?=$row['materi']?></td>
				<td>
					<a href="hapus.php?id=<?=$row['id']?>">Hapus</a>
					<a href="edit.php?id=<?=$row['id']?>&materi=<?=$row['materi']?>&deskripsi=<?=$row['deskripsi']?>&id_mapel=<?=$row['id_mapel']?>&id_guru=<?=$row['id_guru']?>">Edit</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>
