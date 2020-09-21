<html>
		
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php 

			$idade = 16;
			$peso = 80;

			$resultado = $idade >= 16 && $idade <= 69 && $peso >= 50 ? "Com <b>$idade</b> anos e pesando <b>$peso</b>kg, você <b style= 'color: blue;  background-color: yellow;'><u>ESTÁ APTO</u></b> para doar sangue" : "Com <b>$idade</b> anos e pesando <b>$peso</b>kg, você <b style=' color: red; background-color: yellow;'><u>NÃO ESTÁ APTO</u></b> para doar sangue"

		?>
		<h1 style="color: orange;">Resposta</h1>
		<h2 style="color: purple;"> <?= $resultado ?> </h2>
		<hr>

		<h2 style="color: blue;">Exercício de fixação</h2>
		<p><b>01) Crie uma aplicação capaz de identificar se uma determinada pessoa pode ou não doar sangue. Utilize as variáveis $idade e $peso no processo. Neste primeiro moemento faça s atribuição de valores às variaveis de forma estática, ou seja, no processo de atribuição.</b></p>

		<p>Se a idade informada estiver entre (e inclusive) 16 e 69 anos e o peso for igual ou superior a 50kg, então o sistema deve imprimir a mensagem "Não atende aos requisitos.</p>

	</body>
</html>