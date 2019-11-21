<?php
require_once '../Dao/db.php'; 

	class Pessoa{
		private $id;
		private $nome;		
		private $email;
		private $senha;
		private $nascimento;
		private $telefoneFixo;
		private $telefoneCel;
		private $dataCadastro;

		public function getId(){
		return $this->id;
		}
		public function setId($id_){
			$this->id = $id_;
		}

		public function getNome(){
		return $this->nome;
		}
		public function setNome($nome_){
			$this->nome = $nome_;
		}

		public function getEmail(){
		return $this->email;
		}
		public function setEmail($email_){
			$this->email = $email_;
		}

		public function getSenha(){
		return $this->senha;
		}
		public function setSenha($senha_){
			$this->senha = $senha_;
		}

		public function getNascimento(){
		return $this->nascimento;
		}
		public function setNascimento($nascimento_){
			$this->nascimento = $nascimento_;
		}

		public function getTelefoneFixo(){
		return $this->telefoneFixo;
		}
		public function setTelefoneFixo($telefoneFixo_){
			$this->telefoneFixo = $telefoneFixo_;
		}

		public function getTelefoneCel(){
		return $this->telefoneCel;
		}
		public function setTelefoneCel($telefoneCel_){
			$this->telefoneCel = $telefoneCel_;
		}

		public function getDataCadastro(){
		return $this->dataCadastro;
		}
		public function setDataCadastro($dataCadastro_){
			$this->dataCadastro = $dataCadastro_;
		}


		public function  logar($email_, $senha_){
			return login($email_, $senha_);
		}


	} 	

	

?>