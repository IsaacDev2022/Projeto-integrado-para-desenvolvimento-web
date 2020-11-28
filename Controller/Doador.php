<?php 

    class Doador {
        private $id_doador;
        private $nome;
        private $cpf;
        private $nascimento;
        private $cidade;
        private $email;
        private $telefone;
        private $senha;

        public function getId_doador() {
            return $this->id_doador;
        }

        public function setId_doador($id_doador) {
            $this->id_doador = $id_doador;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getCpf() {
            return $this->cpf;
        }

        public function setCpf($cpf) {
            $this->cpf = $cpf;
        }
        
        public function getNascimento() {
            return $this->nascimento;
        }

        public function setNascimento($nasc) {
            $this->nascimento = $nasc;
        }

        public function getCidade() {
            return $this->cidade;
        }

        public function setCidade($cidade) {
            $this->cidade = $cidade;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email = $email;
        } 

        public function getTelefone() {
            return $this->telefone;
        }

        public function setTelefone($tel) {
            $this->telefone = $tel;
        }

        public function getSenha() {
            return $this->senha;
        }

        public function setSenha($senha) {
            $this->senha = $senha;
        }
    }

?>