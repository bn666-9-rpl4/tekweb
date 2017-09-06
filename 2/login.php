<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div align="center">
		<form action="proseslogin.php" method="post">
			<h1>Masuk</h1>
			<table>
				<tr>
					<td>Username :</td>
					<td><input type="text" name='u'></td>
				</tr>
				<tr>
					<td>Password :</td>
					<td><input type="password" name="p"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" value="Login">
						<input type="reset" value="Batal">
					</td>
				</tr>
				<tr>
					<td colspan="2">
						tidak punya akun? <a href="register.php">daftar sekarang</a>
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>