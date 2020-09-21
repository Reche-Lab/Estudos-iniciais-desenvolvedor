<?php 

	//modelo
	class Funcionarios{

		//atributos
		public $nome = null;
		public $telefone = null;
		public $numFilhos = null;
		public $cargo = null;
		public $salario = null;

		//getters setters oveloading
		function __set($atributo, $valor){
			$this->$atributo = $valor;
		}

		function __get($atributo){
			return $this->$atributo;
		}

		//método
		function resumirCadFunc(){
			return $this->__get('nome').' possui '.$this->__get('numFilhos').' filho(s)';
		}	
		
		function modificarNumFilhos($numFilhos){
			$this->numFilhos = $numFilhos;
		}	

	}

	$y = new Funcionarios();
	$y->__set('nome', 'José');
	$y->__set('numFilhos', 2);
	echo $y->resumirCadFunc();
	echo '<hr>';


	$x = new Funcionarios();
	$x->__set('nome', 'Maria');
	$x->__set('numFilhos', 3);
	$x->__set('telefone', '(12) 3832-2782');
	$x->__set('cargo', 'Developer');
	echo $x->resumirCadFunc();

?>