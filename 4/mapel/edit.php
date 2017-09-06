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
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" value="<?=$_GET['nama']?>"></td>
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