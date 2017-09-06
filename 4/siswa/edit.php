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
					<td>NIS</td>
					<td>:</td>
					<td><input type="text" name="nis" value="<?=$_GET['nis']?>"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" value="<?=$_GET['nama']?>"></td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td>:</td>
					<td>
						<select name="id_kelas">
							<?php
								require_once '../koneksi.php';
								$res = mysqli_query($db, "SELECT * FROM dt_kelas");
								while ( $row = mysqli_fetch_assoc($res) ) {
									?>
										<option value="<?=$row['id']?>" <?=$row['id'] == $_GET['id_kelas'] ? 'selected' : ''?>><?=$row['nama']?></option>
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
</body>
</html>