<?php 
require_once 'Pessoa.php';

	class Usuario extends Pessoa {
		private $endereco;
		private $sexo;		
		private $medicamentos;
		private $doencas;
		private $fuma;
		private $bebe;
		private $intoAlimentar;
		private $obs;
		private $funcao;

		public function getEndereco(){
		return $this->endereco;
		}
		public function setEndereco($endereco_){
			$this->endereco = $endereco_;
		}

		public function getSexo(){
		return $this->sexo;
		}
		public function setSexo($sexo_){
			$this->sexo = $sexo_;
		}

		public function getMedicamentos(){
		return $this->medicamentos;
		}
		public function setMedicamentos($medicamentos_){
			$this->medicamentos = $medicamentos_;
		}

		public function getDoencas(){
		return $this->doencas;
		}
		public function setDoencas($doencas_){
			$this->doencas = $doencas_;
		}

		public function getFuma(){
		return $this->fuma;
		}
		public function setFuma($fuma_){
			$this->fuma = $fuma_;
		}

		public function getBebe(){
		return $this->bebe;
		}
		public function setBebe($bebe_){
			$this->bebe = $bebe_;
		}

		public function getIntoAlimentar(){
		return $this->intoAlimentar;
		}
		public function setIntoAlimentar($intoAlimentar_){
			$this->intoAlimentar = $intoAlimentar_;
		}

		public function getObs(){
		return $this->obs;
		}
		public function setObs($obs_){
			$this->obs = $obs_;
		}

		public function getFuncao(){
		return $this->funcao;
		}
		public function setFuncao($funcao_){
			$this->funcao = $funcao_;
		}
	} 	

	

?>