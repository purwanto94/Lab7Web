<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Operator</title>
	</head>
	<body>
		<?php
			$gaji = 5000000;
			$pajak = 0.1;
			$thp = $gaji - ($gaji*$pajak);
			echo "Gaji sebelum pajak = Rp. $gaji <br>";
			echo "Gaji yang dibawa pulang = Rp. $thp";
		?>
	</body>
</html>