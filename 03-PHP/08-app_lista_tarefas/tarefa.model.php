<!-- tarefa.model.php -->
<?php

	//CRUD
	class Tarefa{
		private $id;
		private $id_status;
		private $tarefa;
		private $data_cadastro;

		public function __get($atributo){
			return $this->$atributo;
		}

		public function __set($atributo, $valor){
			$this->$atributo = $valor;
			//--- para deixar o código menos verboso é possivel incluir o um return da instancia do OBJETO Tarefa
			// return $this;
		}
	}

?>