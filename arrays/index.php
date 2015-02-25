<?php
	$months = ['jan', 'feb', 'march'];
	var_dump($months);
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Arrays</title>
	</head>
	<body>
		<h1>Months</h1>
		<ul>
			<?php foreach ($months as $month) {
				echo "<li>$month</li>";
			}



			?>
		</ul>
	</body>
</html>
