<?php
	class Usuario {
		private $id;
		private $name;
		private $cpf;
		private $pwd;

		public function setName($name) {
			$this->name = $name;
		}

		public function getName() {
			return $this->name;
		}

		public function setCpf($cpf) {
			$this->cpf = $cpf;
		}

		public function getCpf() {
			return $this->cpf;
		}

		public function setPwd($pwd) {
			$this->pwd = $pwd;
		}

		public function getPwd() {
			return $this->pwd;
		}
	}

	$obj = new Usuario();

	$obj->setName('Prislaoo');
	$obj->setCpf('123');
	$obj->setPwd('123');

	echo $obj->getName();
	echo $obj->getCpf();
	echo $obj->getPwd();
?>