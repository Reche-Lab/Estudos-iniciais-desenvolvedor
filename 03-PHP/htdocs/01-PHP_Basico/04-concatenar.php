<html>
		<meta charset="utf-8">
		<title>Curso PHP</title>
	<head>
		<title></title>
	</head>

	<body>

		<?php 

			$nome = 'ATITUDE';
			$tipo = 'POSITIVA';
			$retorno = 'ABUNDANCIA';


			//operador ponto "."
			echo 'Lorem ipsum <b style= "color: blue;"><u>' . $nome . '</u></b> dolor <b style= "font-size: 3em;"><u>' . $tipo . '</u></b> sit amet <b style= "background-color: yellow;"><u>' . $retorno . '</u></b>, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

			print '<hr>';

			//Utilizando "aspas duplas" não precisa de ponto
			echo "Aqui vive-se em <b style= 'background-color: yellow; font-size: 3em;'><u> $retorno </u></b>"

		?>




	</body>
</html>