<?php 
	
	class Pai{
		private $nome = 'Bruno'; // não é acessado diretamento pela aplicação
		protected $sobrenome = 'Reche'; // não é acessado diretamento pela aplicação
		public $humor = 'Feliz';

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

	class Filho extends Pai{
		/* ----- substituidos pelos métodos mágicos get e set ------------
		public function getAtributo($attr){
			return $this->$attr;
		}

		public function setAtributo($attr, $valor){
			$this->$attr = $valor;
		}
		*/
	};

	class Neto extends Filho{
		public function __construct(){
			//exibir metodos do objeto
			echo '<pre>';
			print_r(get_class_methods($this));
			echo '</pre>';			
		}
	};

	$pai = new Pai();
/*	$pai->humor = 'Alegre';
	echo $pai->executarAcao();
*/

	$filho = new Filho();

	echo '<pre>';
	print_r($filho);
	echo '</pre>';

	//-----exibir os métodos do objeto
	echo 'get_class_methods($filho) <pre>';
	print_r(get_class_methods($filho));
	echo '</pre>';

	echo $filho->__get('nome');
	echo $filho->__set('nome', 'Henrique');

	echo '<pre>';
	print_r($filho);
	echo '</pre>';

	echo '<pre>';
	print_r($pai);
	echo '</pre>';

	echo '__construct de $neto com get_class_methods($this)';
	$neto = new Neto();
	echo '<pre>';
	print_r($neto);
	echo '</pre>';

	echo 'get_class_methods($neto) <pre>';
	print_r(get_class_methods($neto));
	echo '</pre>';

	echo '<h2>';
	$neto->executarAcao();
	echo '</h2>';


?>


