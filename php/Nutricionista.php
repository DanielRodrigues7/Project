<?php 

	require_once 'Pessoa.php';

	class Nutricionista extends Pessoa {
		private $especialidade;

		public function getEspecialidade(){
		return $this->especialidade;
		}
		public function setEspecialidade($especialidade_){
			$this->especialidade = $especialidade_;
		}
	} 	

?>