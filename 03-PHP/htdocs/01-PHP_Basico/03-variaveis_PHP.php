<html>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	<head>
		<title></title>
	</head>

	<body>

		<?php  
			
			//string
			$nome = 'Bruno Reche';

			//int
			$idade = 29;

			//float
			$peso = 82.5;

			//boolean
			$fumante_sn = true; //true ou false

		?>		
		<h1>Ficha cadastral</h1>
		<br>
		<p>Nome: <?= $nome ?> </p>
		<p>Idade: <?= $idade ?> </p>
		<p>Peso: <?= $peso ?> </p>
		<p>Fumante: <?= $fumante_sn ?> </p> 
		<span>* 1 é true e "" é false</span>




	</body>
</html>