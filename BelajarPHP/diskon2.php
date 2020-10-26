<!DOCTYPE html>
<html>
<head>
	<title>contoh penentuan diskon</title>
</head>
<body>

	<form>
		besar pembelian:
		<INPUT TYPE=TEXT NAME=total_beli><BR><BR>
		<INPUT TYPE=SUBMIT VALUE="tentukan diskon">
	</form>

	<?php
	if (isset($total_beli))
		{$total_beli = intval($total_beli);
			$diskon = 0;
			if ($total_beli >= 100000);
				$diskon = intval(0.1 * $total_beli);

			printf("diskon = %d <BR>\n", $diskon);
			printf("pembayaran = %d <BR>\n", $total_beli - $diskon);}
		?>

</body>
</html>