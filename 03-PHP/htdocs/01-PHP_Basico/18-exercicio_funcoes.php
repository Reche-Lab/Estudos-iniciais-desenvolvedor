<html>
		
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>

		<h2 style="color: blue;"><u>RESPOSTA</u></h2>		

		<?php 
			
			function calculaIR($salario){
				if($salario <= 1903.98){
					$aliquota = 0;
				} else if ($salario > 1903.98  && $salario <= 2826.65) {
					$aliquota = 0.075;
				} else if ($salario > 2826.65  && $salario <= 3751.05) {
					$aliquota = 0.15;
				} else if ($salario > 3751.05  && $salario <= 4664.68) {
					$aliquota = 0.225;
				} else {
					$aliquota = 0.275;
				}

				return $aliquota;
			}	
			
			$salario = 2000;
			$imposto = $salario * calculaIR($salario);
			$aliquota = calculaIR($salario) * 100;
		?>

		<h3> A alíquota de IR para o salário de R$ <?= $salario; ?> é <?= $aliquota; ?>% e imposto R$ <?= $imposto; ?></h3>

		<h2 style="color: green;"><u>EXERCÍCIO</u></h2>
		<p><b>1) Crie uma função para calcular o imposto de renda a ser pago com base em um salário passado por parâmetro.</b></p>

		<p>Para calcular o valor do imposto a ser pago, considere a seguinte tabela abaixo:</p>

		<table border="10" width="70%">
			<tr>
				<th>Base de Cálculo</th>
				<th>Alíquota</th>
			</tr>
			<tr>
				<td>Até R$ 1.903,98</td>
				<td>isento</td>
			</tr>
			<tr>
				<td>De R$ 1.903,99 até R$ 2.826,65</td>
				<td>7,5%</td>
			</tr>
			<tr>
				<td>De R$ 2.826,66 até R$ 3.751,05</td>
				<td>15%</td>
			</tr>
			<tr>
				<td>De R$ 3.751,06 até R$ 4.664,68</td>
				<td>22,5%</td>
			</tr>
			<tr>
				<td>Acima de R$ 4.664,68</td>
				<td>27,5%</td>
			</tr>
		</table>
		
	</body>
</html>