


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
                width: 100%;
            }

        </style>
    </head>
<body>
    <!-- -->
    <?php 
        require_once "ONG.php";
        require_once "../Models/OngDAO.php";

        $ong = new ONG();
        $crud = new OngDAO();

        $ong->setNome($_POST["nome"]);
        $ong->setCnpj($_POST["cnpj"]);
        $ong->setRegistroCartorio($_POST["registroCartorio"]);
        $ong->setSetor($_POST["setor"]);
        $ong->setCidade($_POST["cidade"]);
        $ong->setDescricao($_POST["descricao"]);

        $crud->create($ong);
?>
    <div class="container"> 
        <div class="row">  
            <div class="col s12 m6 offset-m3"> 
                <div class="card"> 
                    <div class="card-panel teal lighten-1 white-text">
                        <h4 class="white-text" align="center"> Sucesso!! </h4>
                    </div>
                    <div class="card-content">
                        <p> ONG cadastrada com sucesso, deseja visualizar? </p> <br> 
                        <a class='btn' href=../View/home.php> Sim </a> 
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