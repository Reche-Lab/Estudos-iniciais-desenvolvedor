<html>
		
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>

		<h2>Loop com Do While</h2>
		<?php
			
			$x = 1;

			do {
				echo "x = $x<br>";
				$x++;
				//também é possivel usar break e continue numa condicional
			} while ( $x <= 10);
			
		?>			


	</body>
</html>