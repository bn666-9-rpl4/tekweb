<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<style>
		.center{
			margin: 0 auto;
		}
		.show{
			display: initial;
		}
		.hide{
			display: none;
		}
		.text-right{
			text-align: right
		}
	</style>
</head>
<body>
	<form action="pregister.php" method="post">
		<table class="center">
			<caption>Buat Akun Baru</caption>
			<tr>
				<td>username</td>
				<td>:</td>
				<td><input type="text" name="u" placeholder="username"></td>
			</tr>
			<tr>
				<td>password</td>
				<td>:</td>
				<td><input type="password" name="p" id="pw1" onkeyup="verifyPW()" placeholder="password"></td>
			</tr>
			<tr>
				<td>verify password</td>
				<td>:</td>
				<td><input type="password" id="pw2" onkeyup="verifyPW()" placeholder="password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td id="pwErr" class="hide">Password tidak sesuai</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" id="kirim"></td>
			</tr>
		</table>
	</form>
	<script>
		function verifyPW() {
			let pw1 = document.getElementById('pw1'),
				pw2 = document.getElementById('pw2'),
				kirim = document.getElementById('kirim'),
				pwErr = document.getElementById('pwErr');
			if ( pw1.value === pw2.value) {
				pwErr.className = 'hide';
				console.log('log if')
				kirim.disabled = null;
			} else {
				pwErr.className = 'show';
				console.log('log else')
				kirim.disabled = 'disabled';
			}
		}
	</script>
</body>
</html>