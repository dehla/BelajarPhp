<!DOCTYPE html>
<html>
<head>
	<title>efek pernyataan break 2</title>
</head>
<body>

	<?php
	for ($i = 1; $i <= 25; $i++)
	{
		switch ($i)
		{
			case 5:
			print ("5 - break 1 <BR>\n");
			break 1;
			case 7:
			print("7 - break 2 <BR>\n");
			break 2;
			default:
			print ("$i <BR>\n");
			break;


		}
	}

	print ("<H1>selesai</H1><BR>\n");
	?>

</body>
</html>