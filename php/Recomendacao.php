<?php 	

	class Recomendacao {
		private $idRecomendacao;
		private $idUser;
		private $idNutri;
		private $descricao;
		private $consumo;
		private $data;
		private $tipo;
		private $url;

		public function getIdRecomendacao(){
		return $this->idRecomendacao;
		}
		public function setIdRecomendacao($idRecomendacao_){
			$this->idRecomendacao = $idRecomendacao_;
		}

		public function getIdUser(){
		return $this->idUser;
		}
		public function setIdUser($idUser_){
			$this->idUser = $idUser_;
		}

		public function getIdNutri(){
		return $this->idNutri;
		}
		public function setIdNutri($idNutri_){
			$this->idNutri = $idNutri_;
		}


		public function getDescricao(){
		return $this->descricao;
		}
		public function setDescricao($descricao_){
			$this->descricao = $descricao_;
		}

		public function getConsumo(){
		return $this->consumo;
		}
		public function setConsumo($consumo_){
			$this->consumo = $consumo_;
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


		public function getUrl(){
		return $this->url;
		}
		public function setUrl($url_){
			$this->url = $url_;
		}
		

	} 	

	

?>