<?php 

    class ONG {
        private $id_ong;
        private $nome;
        private $cnpj;
        private $registroCartorio;
        private $setor;
        private $cidade;
        private $descricao;

        public function getId_ong() {
            return $this->id_ong;
        }

        public function setId_ong($id_ong) {
            $this->id_ong = $id_ong;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getCnpj() {
            return $this->cnpj;
        }

        public function setCnpj($cnpj) {
            $this->cnpj = $cnpj;
        }

        public function getRegistroCartorio() {
            return $this->registroCartorio;
        }

        public function setRegistroCartorio($registroCartorio) {
            $this->registroCartorio = $registroCartorio;
        }

        public function getSetor() {
            return $this->setor;
        }

        public function setSetor($setor) {
            $this->setor = $setor;
        }

        public function getCidade() {
            return $this->cidade;
        }

        public function setCidade($cidade) {
            $this->cidade = $cidade;
        }

        public function getDescricao() {
            return $this->descricao;
        }

        public function setDescricao($desc) {
            $this->descricao = $desc;
        }
    }
?>