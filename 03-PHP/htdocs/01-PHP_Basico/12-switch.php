<html>
		
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php 

			$parametro = 'a'=='b';

			switch ($parametro) {
				case 1:
					echo 'Entrou no case 1';
					break;
				case 'abc':
					echo 'Entrou no case 2';
					break;
				case true:
					echo 'Entrou no case 3';
					break;
				
				default:
					echo 'Entrou no DEFAULT';
					break;
			}
			
		?>
		
	</body>
</html>