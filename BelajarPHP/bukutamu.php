<!DOCTYPE html>
<html>
<head>
	<title>BUKU TAMU</title>
</head>
<body>
	<form action="simpan.php" method="get">
		NAMA :
		<input type="text" name="nama"><P>

		Jenis Kelamin : <br>
		<input type=radio value="P" checkedname="sex">WANITA<br>
		<input type=radio value="L" checkedname="sex">PRIA<br>

		Email :
		<input type=text name=email><p>

		minat :<br>
		<input type=checkbox name=minat1 >Bonsai<br>
		<input type=checkbox name=minat2 >Tanaman Hias<br>
		<input type=checkbox name=minat3 >Musik Jazz<br>
		<input type=checkbox name=minat4 >Pemrograman<p>

		Komentar :
		<textarea rows=4 cols=40 name=komentar></textarea>		
		<p>
		<input type=submit value="KIRIM">
	</form>
</body>
</html>