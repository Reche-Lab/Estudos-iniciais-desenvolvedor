<html>
		
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>

		<h2>Loop com While de 0 a 10</h2>
		<?php
			
			$num = 1;

			echo 'Inicio do loop se $num <= 10 <br>';
			while ( $num <= 10 ) {
				echo $num . '<br>';
				$num++; // critério de parada
			}
			echo 'Fim do loop <hr>';
			//----------------------------------
			$num = 1;
			echo 'Inicio do loop 2 com break condicional se $num > 5 <br>';
			while ( $num <= 10 ) {
				echo $num . '<br>';
				$num++; // critério de parada

				if($num > 5){
					break;
				}
			}
			echo 'Fim do loop 2 <hr>';
			//----------------------------------
			$num = 0;
			echo 'Inicio do loop 3 com "continue" condicional se $num = 3 ou = 7 <br>';
			while ( $num < 10 ) {
				
				$num++; // critério de parada
				if($num == 3 || $num == 7){
					continue;
				}
				echo $num . '<br>';
			}
			echo 'Fim do loop 3';

		?>			


	</body>
</html>