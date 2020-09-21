<html>
		
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php 

			// gettype() => retorna o tipo da variavel
			$valor1 = 10.25;
			$valor2 = (int) $valor1; // double, float ou real resultam no mesmo tipo
			$valor3 = (string) $valor1;
			$valor4 = false;

			echo "variável 1 de valor $valor1 tipo: " . gettype($valor1);
			echo '<br>';
			echo "variável anterior convertida em $valor2: " . gettype($valor2);
			echo '<br>';
			echo "variável 1 $valor1 convertida em: " . gettype($valor3);
			echo '<br>';
			echo gettype($valor4);
			echo '<br>';
		?>
		
	</body>
</html>