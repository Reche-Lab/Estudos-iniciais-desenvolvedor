<?php 
	
	interface EquipamentoEletronicoInterface{
		public function ligar();
		public function desligar();
	}

	class Geladeira implements EquipamentoEletronicoInterface {
		public function abrirPorta(){
			echo 'Abrir porta';
		}
		public function ligar(){
			echo 'Ligar';
		}
		public function desligar(){
			echo 'Desligar';
		}
	}
	class Tv implements EquipamentoEletronicoInterface{
		public function trocarCanal(){
			echo 'Trocar canal';
		}
		public function ligar(){
			echo 'Ligar';
		}
		public function desligar(){
			echo 'Desligar';
		}
	}

	$geladeira = new Geladeira();
	$tv = new Tv();

	//----------Interfaces--------------
	interface MamiferoInterface{
		public function respirar();
	}
	interface TerrestreInterface{
		public function andar();
	}
	interface AquaticoInterface{
		public function nadar();
	}

	//---------Modelos de Objetos---------
	class Humano implements MamiferoInterface, TerrestreInterface {
		public function respirar(){ 
			echo 'Respirar<br>';
		}
		public function andar(){ 
			echo 'Andar<br>';
		}
		public function conversar(){ 
			echo 'Conversar<br>';
		}
	}

	class Baleia implements MamiferoInterface, AquaticoInterface {
		public function respirar(){ 
			echo 'Respirar<br>';
		}
		public function nadar(){ 
			echo 'Nadar<br>';
		}
		public function esguichar(){ 
			echo 'Esguichar<br>';
		}
	}

	//--- interface implements interface ---
	interface AnimalInterface{
		public function comer();
	}
	interface AveInterface extends AnimalInterface{
		public function voar();
	}

	class Papagaio implements AveInterface{
		public function comer(){
			echo 'Comer';
		}
		public function voar(){
			echo 'Voar';
		}			
	}

?>


