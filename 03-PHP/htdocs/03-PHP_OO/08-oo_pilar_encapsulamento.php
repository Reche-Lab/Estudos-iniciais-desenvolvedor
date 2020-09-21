<?php 
	
	class Pai{
		private $nome = 'Bruno'; // não é acessado diretamento pela aplicação
		protected $sobrenome = 'Reche'; // não é acessado diretamento pela aplicação
		public $humor = 'Feliz';

		//------exemplo de forma de manipular os atributos private e protected
		public function getNome(){
			return $this->nome;
		}
		public function setNome($valor){
			if(strlen($valor) >= 3){
				$this->nome = $valor;
			}
		}

		//------métodos Mágicos GET e SET

		public function __get($atributo){
			return $this->$atributo;
		}
		public function __set($atributo, $valor){
			$this->$atributo = $valor;
		}

		//----------private e protected em metodos

		private function executarMania(){
			echo 'Assobiar<br>';
		}
		protected function responder(){
			echo 'Oi<br>';
		}
		public function executarAcao(){
			$this->executarMania();
			$this->responder();
		}

	}

	$pai = new Pai();
	echo 'Atributo público: ' . $pai->humor . '<br>';
	$pai->humor = 'Alegre';
	echo 'Atributo público: ' . $pai->humor . '<br>';
	//----------Métodods para set e get de valores---------
	echo '<hr>';
	echo $pai->getNome() . '<br>';
	$pai->setNome('Xo');
	echo $pai->getNome();
	echo '<hr>';
	//----------Metodos mágicos-----
	$pai->nome = 'Socrates';
	$pai->sobrenome = 'Platão';
	echo $pai->nome;
	echo '<br>';
	echo $pai->sobrenome;
	echo '<hr>';
	//---------outros Métodos privados e protegidos
	echo $pai->executarAcao();

?>