<html>
		
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php 
			
			function exibirBoasVindas(){
				echo 'Seja bem vinda. Seja bem vindo. <br>';
			}
			exibirBoasVindas();

			function calculaAreaTerreno($altura, $comprimento){
					
				return $altura * $comprimento;
			}
			echo calculaAreaTerreno(10, 5) . '<br>';

			$area = calculaAreaTerreno(20, 30);
			echo $area . '<br>';
			
		?>
		
	</body>
</html>