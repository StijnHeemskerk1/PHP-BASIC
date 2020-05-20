<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="">
	<script src=""></script>
	<title></title>
</head>
<body>

	<?php 
		$prod_besteld = 9;
		if($prod_besteld < 10) {
			$prijs = 1.50;
		} elseif($prod_besteld < 20) {
			$prijs = 1.25;
		} else {
			$prijs = 1.00;
		}
		echo $prijs . "<br>";

		$prod_besteld = 19;
		if($prod_besteld < 10) {
			$prijs = 1.50;
		} elseif($prod_besteld < 20) {
			$prijs = 1.25;
		} else {
			$prijs = 1.00;
		}
		echo $prijs . "<br>";

		$prod_besteld = 31;
		if($prod_besteld < 10) {
			$prijs = 1.50;
		} elseif($prod_besteld < 20) {
			$prijs = 1.25;
		} else {
			$prijs = 1.00;
		}
		echo $prijs . "<br>";

	?>

</body>
</html>