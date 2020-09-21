<?php 

	//modelo
	class Funcionarios{

		//atributos
		public $nome = 'José';
		public $telefone = '11 99999-9999';
		public $numFilhos = 2;

		//método
		function resumirCadFunc(){
			return "$this->nome possui $this->numFilhos filhos";
		}	
		
		function modificarNumFilhos($numFilhos){
			$this->numFilhos = $numFilhos;
		}	

	}

	$y = new Funcionarios();
	echo $y->resumirCadFunc() . '<br>';

	$y->modificarNumFilhos(3);
	echo $y->resumirCadFunc() . '<hr>';

	$x = new Funcionarios();
	echo $x->resumirCadFunc() . '<br>';
	$x->modificarNumFilhos(1);
	echo $x->resumirCadFunc() . '<hr>';





?>