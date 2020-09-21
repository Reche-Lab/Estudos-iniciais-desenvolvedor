<?php 

	//modelo
	class Funcionarios{

		//atributos
		public $nome = null;
		public $telefone = null;
		public $numFilhos = null;

		//getters setters
		function setNome($nome){
			$this->nome = $nome;
		}

		function setNumFilhos($numFilhos){
			$this->numFilhos = $numFilhos;
		}

		function setTelefone($telefone){
			$this->telefone = $telefone;
		}

		function getNome(){
			return $this->nome;
		}

		function getNumFilhos(){
			return $this->numFilhos;
		}

		function getTelefone(){
			return $this->telefone;
		}

		//método
		function resumirCadFunc(){
			return "$this->nome possui $this->numFilhos filho(s)";
		}	
		
		function modificarNumFilhos($numFilhos){
			$this->numFilhos = $numFilhos;
		}	

	}

	$y = new Funcionarios();
	$y->setNome('José');
	$y->setNumFilhos(2);
	echo $y->resumirCadFunc();
	echo '<br>';
	echo $y->getNome() . ' possui ' . $y->getNumFilhos() . ' filho(s).';
	echo '<hr>';


	$x = new Funcionarios();
	$x->setNome('Maria');
	$x->setNumFilhos(3);
	echo $x->getNome().' possui '.$x->getNumFilhos().' filho(s).';




?>