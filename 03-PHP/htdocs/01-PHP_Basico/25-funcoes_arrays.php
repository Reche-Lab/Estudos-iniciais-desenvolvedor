<html>
		
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>

		<?php
			
			echo '<h3>Função is_array()</h3>';
			$array = ['notebook', 'tela', 'ipad'];
			$retorno = is_array($array); //true ou false
			if($retorno){
				echo 'Sim, é um array';
			} else{
				echo 'Não, não é um array';
			}
			
			//--------------------------------------
			echo '<hr><h3>Função array_keys()</h3>';
			$indices = [1 => 'a', 7 => 'b', 18 => 'c'];
			echo "<pre>";
				print_r($indices);
			echo "</pre>";

			echo "<pre>";
				print_r(array_keys($indices));
			echo "<pre>";

			//--------------------------------------
			echo '<hr><h3>Função sort() - ordenação de array</h3>';
			$sort = ['teclado', 'mouse', 'cabo hdmi', 'gabinete', 'tela'];
			echo "<pre>";
				print_r($sort);
			echo "<pre>Após o sort() - alterou os indices";
			sort($sort);
			echo "<pre>";
				print_r($sort);
			echo "<pre>";

			//--------------------------------------
			echo '<hr><h3>Função asort()</h3>';
			$asort = ['teclado', 'mouse', 'cabo hdmi', 'gabinete', 'tela'];
			echo "<pre>";
				print_r($asort);
			echo "<pre>Após o asort() - mantém os indices originais";
			asort($asort);
			echo "<pre>";
				print_r($asort);
			echo "<pre>";

			//--------------------------------------
			echo '<hr><h3>Função count()</h3>';
			$count = ['teclado', 'mouse', 'cabo hdmi', 'gabinete', 'tela'];
			echo "<pre>";
				print_r($count);
			echo "<pre>Resultado do count() - qtde de elementos<br>";
			echo count($count);

			//--------------------------------------
			echo '<hr><h3>Função array_merge()</h3>';
			$array1 = ['osx', 'windows'];
			$array2 = array('linux');
			$array3 = ['solaris'];

			$nova_array = array_merge($array1, $array2, $array3);
			echo "<pre>Resultado após array_merge() de 3 arrays diferentes.<br>";
				print_r($nova_array);
			echo "<pre>";

			//--------------------------------------
			echo '<hr><h3>Função explode() - separa por caracter informado</h3>';
			$data = "26/04/2018";
			$data_retorno = explode('/', $data);
			echo $data;
			echo "<pre>Resultado após explode('/', data)";
				print_r($data_retorno);
			echo "<pre>Transformando (concatenando os indices da array) em data para leitura do PHP<br>";
			echo $data_retorno[2] . '-' . $data_retorno[1] . '-' . $data_retorno[0];

			//--------------------------------------
			echo '<hr><h3>Função implode() - junta caracteres de uma array em uma string</h3>';
			$implode = ['a', 'b', 'x', 'y'];
			echo "<pre>";
				print_r($implode);
			echo "<pre>Após utilização da função implode('/', array):<br>";
			$implode_retorno  = implode('/', $implode);
			echo $implode_retorno;

		?>			


	</body>
</html>