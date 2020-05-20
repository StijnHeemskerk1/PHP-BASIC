<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="">
	<script src=""></script>
	<title></title>
</head>
<body>

	<?php 
		$test1 = 3;
		$test2 = 6;
		if ($test1 == $test2){
			echo "Test1 en Test2 zijn gelijk<br>";
		} elseif ($test1 <> $test2) {
			echo "Test 1 en Test2 zijn ongelijk<br>";
		} elseif ($test1 === $test2) {
			echo "Test1 en Test2 zijn identiek<br>";
		} elseif ($test1 > $test2) {
			echo "Test1 is groter dan Test2<br>";
		} elseif ($test1 < $test2) {
			echo "Test1 is kleiner dan Test2<br>";
		}
	?>

</body>
</html>