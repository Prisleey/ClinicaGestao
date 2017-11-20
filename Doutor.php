<?php
    class Doutor {
        private $crm;
        private $nome;
        
        public function __construct(){
			
        }
        
        public function getCrm() {
            return $this->crm;
        }

        public function setCrm($crm) {
            $this->crm = $crm;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }
    }
?>