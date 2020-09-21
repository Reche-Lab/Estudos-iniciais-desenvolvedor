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
			return "$this->nome possui $this->numFilhos filho(s)";
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
	echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filho(s).';
	echo '<hr>';


	$x = new Funcionarios();
	$x->__set('nome', 'Maria');
	$x->__set('numFilhos', 3);
	$x->__set('telefone', '(12) 3832-2782');
	$x->__set('cargo', 'Developer');
	echo 'Olá, conhece a <b>'.$x->__get('nome').'</b>? Ela uma <b>'.$x->__get('cargo').'</b> muito competente aqui da nossa empresa, possui <b>'.$x->__get('numFilhos').'</b> filho(s) e participa de ações sociais em sua comunidade. Para entrar em contato com a nossa querida <b>'.$x->__get('cargo').'</b>, entre emm contato no telefone: <b>'.$x->__get('telefone').'</b> para saber como ela consegue fazer tudo isso ainda mais.';

?>