<?php 

	class Pessoa{

		public $nome = null;

		//constructor
		function __construct($nome){
			echo "Objeto iniciado <hr>";
			$this->nome = $nome;
		}

		//destructor
		function __destruct(){
			echo 'Objeto removido.<hr>';
		}

		//teste do constructor
		function __get($atributo){
			return $this->$atributo;
		}

		function correr(){
			return $this->__get('nome').' está correndo';
		}
	}


	$pessoa = new Pessoa('Bruno');
	echo $pessoa->__get('nome');
	echo '<hr>'. $pessoa->correr().'<hr>';

	//unset($pessoa); //proposital
?>