<html>
		
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php

			//
			$usuario_possui_cartao_loja = true;
			$valor_compra = 225;
			$valor_frete = 50;
			$recebeu_desconto_frete = false;

			if ($usuario_possui_cartao_loja && $valor_compra >= 100 ) {
				$valor_frete= 0;
				$recebeu_desconto_frete = true;
			}

		?>

		<h1>Detalhes do Pedido</h1>
		<p>Possui cartão da loja? 
			<?php
				if ($usuario_possui_cartao_loja) {
					echo "Sim";
				} else { 
					echo "Não";
				}
			?>
		</p>

		<p>Valor da compra: <?= $valor_compra ?></p>

		<p>Possui cartão da loja?
			<?php
				if ($usuario_possui_cartao_loja) {
					echo "Sim";
				} else { 
					echo "Não";
				}
			?>
		</p>

		<p>Valor do frete: <?= $valor_frete ?></p>

	</body>
</html>