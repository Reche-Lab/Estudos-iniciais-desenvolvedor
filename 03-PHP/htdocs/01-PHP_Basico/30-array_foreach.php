<html>
		
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>

		
		<?php
			
			$itens = ['sofá', 'mesa', 'cadeira', 'fogão', 'geladeira'];
			
			echo '<pre>';
			print_r($itens);
			echo '</pre>';

			echo '<h2>Loop com FOREACH</h2>';

			foreach ($itens as $item) {
				echo $item;

				if($item == 'mesa'){
					echo ' - Compre uma mesa e ganhe 25% de desconto na compra de 4 cadeiras.';
				}
				echo '<br>';
			}

		?>			


	</body>
</html>