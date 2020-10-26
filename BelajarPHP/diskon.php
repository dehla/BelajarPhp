<!DOCTYPE html>
<html>
<head>
	<title>contoh penentun diskon</title>
</head>
<body>

	<?php
	$total_beli =200000;
	$keterangan ="tak dapat diskon";

	if ($total_beli >= 100000)
	$keterangan ="dapat diskon";

	print("$keterangan <BR>\n");
	?>

</body>
</html>