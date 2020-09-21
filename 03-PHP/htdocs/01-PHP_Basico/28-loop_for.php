<html>
		
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>

		<h2>Loop com FOR</h2>
		<?php
			
			for ($i=0; $i <= 10 ; $i++) { 
				echo "i = $i<br>";
			}
			
			echo '<hr>';

			for ($i=10; true ; $i++) { 
				echo "i = $i<br>";
				if ($i>=20) {
					break;
					//continue
				}
			}
		?>			


	</body>
</html>