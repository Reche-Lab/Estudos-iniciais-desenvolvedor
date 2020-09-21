<html>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	<head>
		<title></title>
	</head>

	<body>

		<?php 

			// && ou AND = E (verdadeiro de todas expressões verdadeiras)
			// || ou OR = Ou (se ao menos uma expressão é verdadeira)
			// XOR = uma condição verdadeira e outra falsa
			// ! = inverte resultado para verdadeiro ou falso
			
			// () estabelecer precedência
			
			if((2 === 1+1 && 4 == 2+2) || 5 != 1+3)
			  	{echo 'Verdadeiro';} 
				else {echo 'Falso';};

			echo '<hr>';


			// ! = inverte resultado para verdadeiro ou falso
			if(!(2 === 1+1 && 4 == 2+2)) {echo 'Verdadeiro';} 
				else {echo 'Falso';};

			echo '<hr>';

			

		?>




	</body>
</html>