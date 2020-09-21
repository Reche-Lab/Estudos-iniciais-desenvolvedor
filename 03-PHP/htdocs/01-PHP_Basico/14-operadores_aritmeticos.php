<html>
		
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php 

			$num1 = 13;
			$num2 = 4;

			echo "A operação ($num1 + $num2) = " . ($num1 + $num2) . '<br>';
			echo "A operação ($num1 - $num2) = " . ($num1 - $num2) . '<br>';
			echo "A operação ($num1 x $num2) = " . ($num1 * $num2) . '<br>';
			echo "A operação ($num1 / $num2) = " . ($num1 / $num2) . '<br>';
			echo "O resto da operação ($num1 / $num2) = " . ($num1 % $num2) . " por que o inteiro do resultado " . ($num1 / $num2) . " é " . (int)($num1 / $num2) . ", e " . (int)($num1 / $num2) . " x $num2 = " . (int)($num1 / $num2) * $num2 . " e $num1 - "  . (int)($num1 / $num2) * $num2 . " = " . ($num1 % $num2);


		?>
		
	</body>
</html>