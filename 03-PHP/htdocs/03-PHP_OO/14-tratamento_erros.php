<?php 
	//----- try, catch, finally e throw
	try{
		echo '<h3 style="color: blue;"> *** Try *** </h3>';
		$sql = 'Select * from clientes';
		mysql_query($sql); //Erro
	} catch(Error $e) {
		echo '<h3 style="color: orange;"> *** Catch Error *** </h3>';
		echo "<p style='color: orange;'>$e</p>";
	} finally{
		echo '<h3 style="color: red;"> *** Finally *** </h3>';
	}

	//---------------------------------------
	echo '<hr>';

	try{
		echo '<h3 style="color: blue;"> *** Try *** </h3>';
		if(!file_exists('require_arquivo_a.php')){
			throw new Exception('O arquivo em questão deveria estar disponível às ' . date('d/m/y H:i:s') . ' horas, mas não estava. Vamos seguir mesmo assim.');
		}

	} catch(Error $e) {
		echo '<h3 style="color: orange;"> *** Catch Error *** </h3>';
		echo "<p style='color: orange;'>$e</p>";

	} catch(Exception $e){
		echo '<h3 style="color: orange;"> *** Catch Exception *** </h3>';
		echo "<p style='color: orange;'>$e</p>";	

	} finally{
		echo '<h3 style="color: red;"> *** Finally *** </h3>';
	}

	//-------------------------------------	
	echo '<hr>';

	try{
		echo '<h3 style="color: blue;"> *** Try *** </h3>';
		if(!file_exists('require_arquivo_a.php')){
			throw new Error('O arquivo em questão deveria estar disponível às ' . date('d/m/y H:i:s') . ' horas, mas não estava. Vamos seguir mesmo assim.');
		}

	} catch(Error $e) {
		echo '<h3 style="color: orange;"> *** Catch Error *** </h3>';
		echo "<p style='color: orange;'>$e</p>";

	} catch(Exception $e){
		echo '<h3 style="color: orange;"> *** Catch Exception *** </h3>';
		echo "<p style='color: orange;'>$e</p>";	

	} finally{
		echo '<h3 style="color: red;"> *** Finally *** </h3>';
	}

?>


