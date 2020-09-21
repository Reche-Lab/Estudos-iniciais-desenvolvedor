<?php 
	
	class Veiculo{
		public $placa = null;
		public $cor = null;

		function __construct($placa, $cor){
			$this->$placa = $placa;
			$this->$cor = $cor;
		}

		function acelerar(){
			echo 'Acelerar';
		}

		function freiar(){
			echo 'Freiar';
		}
	}

	
	class Carro extends Veiculo{
		
		public $teto_solar = true;

		function abrirTetoSolar(){
			echo 'Abrir teto solar';
		}

		function alterarPosicaoVolante(){
			echo 'Alterar posição volante';
		}

	}

	class Moto extends Veiculo{

		public $contraPesoGuidao = true;

		function empinar(){
			echo 'Empinar';
		}
	}

	$carro = new Carro('ABC-1234', 'Branco');
	$moto = new Moto('DEF-1122', 'Preto');

	echo '<pre>';
	print_r($carro);
	echo '<br>';
	print_r($moto);
	echo '</pre><hr>';

	$carro->abrirTetoSolar();
	echo '<br>';
	$carro->freiar();
	echo '<br>';
	$moto->empinar();
	echo '<br>';
	$moto->acelerar();

?>