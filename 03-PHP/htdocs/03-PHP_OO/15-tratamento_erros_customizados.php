<?php 
	
	class MinhaExceptionCustomizada extends Exception{
		private $erro = '';

		public function __construct($erro){
			$this->erro = $erro;
		}

		public function exibirMensagemCustomizada(){
			echo '<h1 style="border: solid 3px orange; background: red; color: white; padding: 15px; margin: 15px; text-align: center;">';
			echo $this->erro;
			echo '</h1>';
		}
	}

	try{

		throw new MinhaExceptionCustomizada('Esse é um erro de teste');

		//Error (php)
		//Exception (programadores)
		//Customizadas (programadores)

	} catch(MinhaExceptionCustomizada $e){
		$e->exibirMensagemCustomizada();
	}

?>


