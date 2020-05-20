<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="">
	<script src=""></script>
	<title></title>
</head>
<body>

	<?php 
		$var1= 6;
		$var2= 6;
		echo "hallo";

		if ($var1 < 10 && $var2 == 6) {
			echo "Een vergelijking met &&<br>";
			if ($var1 == 6 || $var2 == 3) {
				echo "Een vergelijking met ||<br>";
				if ($var1 == 6 xor $var2 == 5) {
					echo "Een vergelijking met xor<br>";
					if (!$var1) {
						echo "true";
					} else {
						echo "Een vergelijking met !";
					}
				}
			} 
		} 
	?>

</body>
</html>