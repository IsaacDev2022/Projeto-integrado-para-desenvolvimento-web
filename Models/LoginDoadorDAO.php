<?php 

    require_once "../Controller/Doador.php";
    require_once "Conexao.php";

    class LoginDoadorDAO {

        public function readLogin($email, $senha) {
            $sql = "SELECT * FROM doador WHERE email = :email AND senha = :senha";
            $smt = Conexao::getConnect()->prepare($sql);

            $smt->bindValue("email", $email);
            $smt->bindValue("senha", $senha);

            $smt->execute();

            if ($smt->rowCount() > 0) {
                $dado = $smt->fetch();

                $_SESSION["doador"] = $dado["nome"];
                
                return true;
            }

            else {
                return false;
            }
        }
    }
?>