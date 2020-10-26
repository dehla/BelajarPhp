<!DOCTYPE html>
<html>
<head>
	<title>contoh konversi dengan cast</title>
</head>
<body>

	<?php
	$suhu = "28.3 derajat celcius";
	print("tipe string : $suhu <BR>\n");
	printf("tipe double : %s <BR>\n", (double) $suhu);
	printf("tipe integer : %s <BR>\n", (int) ($suhu));
	printf("tipe string : %s <BR>\n", $suhu);

	$bilangan = 28;
	$suhu = (string) $bilangan;  // konversi ke string
	printf("bil.ke string : %s <BR>\n", $suhu);
	?>

</body>
</html>