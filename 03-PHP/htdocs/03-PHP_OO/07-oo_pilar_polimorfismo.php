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

		function trocarMarcha(){
			echo 'Desengatar marcha com o pé e engatar marcha com a mão';
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

		function trocarMarcha(){
			echo 'Desengatar marcha com a mão e engatar marcha com o pé';
		}
	}

	class Caminhao extends Veiculo{}

	$carro = new Carro('ABC-1234', 'Branco');
	$moto = new Moto('DEF-1122', 'Preto');
	$caminhao = new Caminhao('GHI-3344','Prata');

	$carro->trocarMarcha();
	echo '<br>';
	$moto->trocarMarcha();
	echo '<br>';
	$caminhao->trocarMarcha();
	

?>