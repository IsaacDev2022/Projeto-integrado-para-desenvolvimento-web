<?php 
    require_once "../Controller/Doador.php";
    require_once "Conexao.php";

    Class DoadorDAO {

        public function create(Doador $d) {
            try {
                $sql = "INSERT INTO doador (nome, cpf, nascimento, cidade, email, telefone, senha) VALUES (?, ?, ?, ?, ?, ?, ?)";
                $smt = Conexao::getConnect()->prepare($sql);
                
                $smt->bindValue(1, $d->getNome());
                $smt->bindValue(2, $d->getCpf());
                $smt->bindValue(3, $d->getNascimento());
                $smt->bindValue(4, $d->getCidade());
                $smt->bindValue(5, $d->getEmail());
                $smt->bindValue(6, $d->getTelefone());
                $smt->bindValue(7, $d->getSenha());

                $smt->execute();

            } catch (Exception $e) {
                echo "Erro: ".$e->getMessage();
            }
        }

        public function read() {
            try {
                $sql = "SELECT * FROM doador";
                $smt = Conexao::getConnect()->prepare($sql);
                $smt->execute();
    
                if ($smt->rowCount() > 0) {
                    $result = $smt->fetchAll(PDO::FETCH_ASSOC);
                    return $result;
                }

            } catch (Exception $e) {
                echo "Erro: ".$e->getMessage();
            }
        }

        public function update(Doador $d) {
            try {
                $sql = "UPDATE doador SET nome = ?, cpf = ?, nascimento = ?, cidade = ?, email = ?, telefone = ? WHERE ID_DOADOR = ?";
                $smt = Conexao::getConnect()->prepare($sql);
    
                $smt->bindValue(1, $d->getNome());
                $smt->bindValue(2, $d->getCpf());
                $smt->bindValue(3, $d->getNascimento());
                $smt->bindValue(4, $d->getCidade());
                $smt->bindValue(5, $d->getEmail());
                $smt->bindValue(6, $d->getTelefone());
                $smt->bindValue(7, $d->getId_doador());

                $smt->execute();

            } catch (Exception $e) {
                echo "Erro: ".$e->getMessage();
            }
        }

        public function delete($id_doador) {
            try {
                $sql = "DELETE FROM doador WHERE ID_DOADOR = ?";
                $smt = Conexao::getConnect()->prepare($sql);
                $smt->bindValue(1, $id_doador);

                $smt->execute();

            } catch (Exception $e) {
                echo "Erro: ".$e->getMessage();
            }   
        }
    } 
?>