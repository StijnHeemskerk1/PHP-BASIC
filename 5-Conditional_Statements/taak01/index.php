<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="">
	<script src=""></script>
	<title></title>
</head>
<body>

	<?php 
		$test1 = 12;
		$test2 = "gewoon tekst";
		echo var_dump($test1 == $test2);
		echo "<br>";
		echo var_dump($test1 === $test2);
		echo "<br>";
		echo var_dump($test1 != $test2);
		echo "<br>";
		echo var_dump($test1 > $test2);
		echo "<br>";
		echo var_dump($test1 < $test2);
		echo "<br>";
		echo var_dump($test1 <> $test2);
		echo "<br>";
		echo var_dump($test1 >= $test2);
		echo "<br>";
		echo var_dump($test1 <= $test2);
	?>

</body>
</html>