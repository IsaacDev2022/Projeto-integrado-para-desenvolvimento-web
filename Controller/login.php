<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<?php 
    require_once "../Models/Conexao.php";
    require_once "../Models/LoginDoadorDAO.php";

    if (isset($_POST["email"]) || isset($_POST["senha"])) {

        $email = addslashes($_POST["email"]);
        $senha = addslashes($_POST["senha"]);

        $crud = new LoginDoadorDAO();
        if ($crud->readLogin($email, $senha) == true) {
            if (isset($_SESSION["doador"])) {
                header("Location: ../View/home.php");
            }

            else {
                header("Location: ../View/logar.php");
            } 
        }

        else {
            header("Location: ../View/logar.php");
        }

    }

    else {
        header("Location: ../View/logar.php");
    }

?>
