<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <!-- Materialize CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <meta charset="utf-8">
        <style>
            * {
                margin: 0;
                padding: 0;
                font-size: 100%;
                box-sizing: border-box;
                font-family: Verdana, Geneva, sans-serif;
                color: #8fbdb7;
            }

            body {
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-image: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.9)), url('../Img/ongs3.jpg'); 
                border-radius: 40px;
            }

            .btn {
                width: 48%;
            }

        </style>
    </head>
<body>
    <?php 
            require_once "Doador.php";
            require_once "../Models/DoadorDAO.php";

            $novoDoador = new Doador();
            $crud = new DoadorDAO();

            $novoDoador->setNome($_POST["nome"]);
            $novoDoador->setCpf($_POST["cpf"]);
            $novoDoador->setNascimento($_POST["nascimento"]);
            $novoDoador->setCidade($_POST["cidade"]);
            $novoDoador->setEmail($_POST["email"]);
            $novoDoador->setTelefone($_POST["telefone"]); 
            $novoDoador->setSenha($_POST["senha"]);

            $crud->create($novoDoador);
    ?>
    <div class="container"> 
        <div class="row">  
            <div class="col s12 m6 offset-m3"> 
                <div class="card"> 
                    <div class="card-panel teal lighten-1 white-text">
                        <h4 class="white-text" align="center"> Sucesso!! </h4>
                    </div>
                    <div class="card-content">
                        <p> Dados inseridos no sistema, deseja realizar login? </p> <br> 
                        <a class='btn' href=../View/logar.php> Sim </a> 
                        <a class='btn red' href=../View/index.php> Não, voltar </a> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        M.AutoInit();
    </script>
</body>
</html>