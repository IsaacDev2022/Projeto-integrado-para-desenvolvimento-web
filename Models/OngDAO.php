<?php 
    require_once "../Controller/ONG.php";
    require_once "Conexao.php";

    Class OngDAO {

        public function create(ONG $ong) {
            try {
                $sql = "INSERT INTO ong (nome, cnpj, registroCartorio, setor, cidade, descricao) VALUES (?, ?, ?, ?, ?, ?)";
                $smt = Conexao::getConnect()->prepare($sql);
                
                $smt->bindValue(1, $ong->getNome());
                $smt->bindValue(2, $ong->getCnpj());
                $smt->bindValue(3, $ong->getRegistroCartorio());
                $smt->bindValue(4, $ong->getSetor());
                $smt->bindValue(5, $ong->getCidade());
                $smt->bindValue(6, $ong->getDescricao());

                $smt->execute();

            } catch (Exception $e) {
                echo "Erro: ".$e->getMessage();
            }
        }

        public function read() {
            try {
                $sql = "SELECT * FROM ong";
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

        public function update(ONG $ong) {
            try {
                $sql = "UPDATE ong SET nome = ?, cnpj = ?, registroCartorio = ?, setor = ?, cidade = ?, descricao = ? WHERE ID_ONG = ?";
                $smt = Conexao::getConnect()->prepare($sql);
    
                $smt->bindValue(1, $ong->getNome());
                $smt->bindValue(2, $ong->getCnpj());
                $smt->bindValue(3, $ong->getRegistroCartorio());
                $smt->bindValue(4, $ong->getSetor());
                $smt->bindValue(5, $ong->getCidade());
                $smt->bindValue(6, $ong->getDescricao());
                $smt->bindValue(7, $ong->getId_ong());

                $smt->execute();

            } catch (Exception $e) {
                echo "Erro: ".$e->getMessage();
            }
        }

        public function delete($id_ong) {
            try {
                $sql = "DELETE FROM ong WHERE ID_ONG = ?";
                $smt = Conexao::getConnect()->prepare($sql);
                $smt->bindValue(1, $id_ong);

                $smt->execute();

            } catch (Exception $e) {
                echo "Erro: ".$e->getMessage();
            }   
        }
    } 
    
?>