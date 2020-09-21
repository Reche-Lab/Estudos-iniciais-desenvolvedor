<html>
		
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body style='background-color: pink;'>

		<?php
			
			$lista_coisas = [];
			$lista_coisas['frutas'] = ['Banana','Maçã','Morango','Uva'];
			$lista_coisas['cores'] = array('Amarelo', 'Verde', 'Vermelho', 'Roxo');

			echo '<pre>';
			print_r($lista_coisas);
			echo '</pre><hr>';	

			$coisa = 'Morango';
			echo "<p style='background-color: yellow;'>Procurando $coisa na array:</p>";
									
			$existe = in_array($coisa, $lista_coisas['frutas']); // retorno é true ou false
			echo 'Usando "in_array" - ';
			if ($existe) {
				echo 'O valor EXISTE na array';
			} else {echo 'O valor NÃO EXISTE na array';}
			echo '<br>';
			//--------------------------------
			$procura = array_search($coisa, $lista_coisas['frutas']); // retorno é o indice da array ou null
			echo 'Usando "array_search" - ';
			if ($procura != null) {
				echo 'O índice da array procurada é ' . $procura;
			} else {echo 'O valor NÃO EXISTE na array';}


		?>			

	</body>
</html>