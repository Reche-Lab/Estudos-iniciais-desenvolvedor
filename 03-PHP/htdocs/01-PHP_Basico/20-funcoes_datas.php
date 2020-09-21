<html>
		
	<head>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	</head>

	<body>

		<p>* para os formatos de datas consultar <a href="https://www.php.net/manual/en/function.date">link documentação php</a></p>

		<?php

			echo date('d/m/Y H:i'); // Recuperar o timezone default da aplicação
			echo '<br>';
			echo date_default_timezone_get();
			echo '<br>';
			date_default_timezone_set('America/Sao_Paulo');
			echo '<br>';
			echo date_default_timezone_get();
			echo '<br>';
			echo date('d/m/Y H:i');
		
			echo '<hr>';
		
			$data_inicial = '2018-04-24';
			$data_final = '2018-05-15';

			//timestamp
			//01/01/1970 -- 

			$time_inicial = strtotime($data_inicial);
			$time_final = strtotime($data_final);
			echo $data_inicial . ' - ' . $time_inicial . ' equivalente em segundo desde 01/01/1970';
			echo '<br>';
			echo $data_final . ' - ' . $time_inicial . ' equivalente em segundo desde 01/01/1970 <hr>';

			$diferenca_times = $time_final - $time_inicial;
			echo $diferenca_times . ' diferença em segundo entre data inicial e final <br>';
			echo 'Um dia tem ' . 60*60*24 . ' segundos <br>';
			echo $diferenca_times . ' segundos é igual a ' . $diferenca_times / (60*60*24) . ' dias';

		?>			

	</body>
</html>