<?php
	require_once '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
		<form action="update.php" method="post">
			<input type="hidden" name="id" value="<?=$_GET['id']?>">
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
										<option value="<?=$row['id']?>" <?=$row['id'] == $_GET['id_guru'] ? 'selected' : ''?>><?=$row['nama']?></option>
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
										<option value="<?=$row['id']?>" <?=$row['id'] == $_GET['id_mapel'] ? 'selected' : ''?>><?=$row['nama']?></option>
									<?php
								}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Deskripsi</td>
					<td>:</td>
					<td><textarea name="deskripsi"><?=$_GET['deskripsi']?></textarea></td>
				</tr>
				<tr>
					<td>Materi</td>
					<td>:</td>
					<td><input type="text" name="materi" value="<?=$_GET['materi']?>"></td>
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
</body>
</html>