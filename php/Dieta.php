<?php 	
	require_once 'Alimento.php';

	class Dieta extends Alimento {
		private $idDieta;
		private $quantidadeConsumida;
		private $modoPreparo;
		private $data;
		private $tipo;

		public function getIdDieta(){
		return $this->idDieta;
		}
		public function setIdDieta($idDieta_){
			$this->idDieta = $idDieta_;
		}

		public function getQuantidadeConsumida(){
		return $this->quantidadeConsumida;
		}
		public function setQuantidadeConsumida($quantidadeConsumida_){
			$this->quantidadeConsumida = $quantidadeConsumida_;
		}

		public function getModoPreparo(){
		return $this->modoPreparo;
		}
		public function setModoPreparo($modoPreparo_){
			$this->modoPreparo = $modoPreparo_;
		}

		public function getData(){
		return $this->data;
		}
		public function setData($data_){
			$this->data = $data_;
		}

		public function getTipo(){
		return $this->tipo;
		}
		public function setTipo($tipo_){
			$this->tipo = $tipo_;
		}
		

	} 	

	

?>