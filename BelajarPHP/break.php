<!DOCTYPE html>
<html>
<head>
	<title>contoh untuk memperlihatkan efek break</title>
</head>
<body>

	<?php
	for ($i = 1; $i <= 25; $i++)
	{
		print("$i <BR>\n");

		if ($i == 10)
			break;
	}
	?>

</body>
</html>