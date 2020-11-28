<!DOCTYPE html>
<html>
    <head>
        <title> Formulário da ONG </title>
        <meta charset="utf-8">
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
                border: none;
                outline: none;
                font-family: Verdana, Geneva, sans-serif;
            }

            body {
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-image: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.9)), url('../Img/ongs3.jpg'); 
            }

            .card {
                border-radius: 10px;
            }

            .btn {
                border-radius: 5px;
            }

            .container input {
                width: 100%;
                margin-bottom: 10px;
                margin-top: 30px;
            }
        </style>
    </head>
<body>

    <div class="container">
        <div class="row">
            <div class="col s12 m8 offset-m2">
                <form action="../Controller/ControleOng.php" method="POST">
                    <div class="card">
                        <div class="card-panel teal lighten-1 white-text">
                            <h4 align="center"> Preencha os dados abaixo: </h4>
                        </div> 
                        <div class="card-content">
                            <div class="input-field">
                                <i class="material-icons prefix">account_circle</i>
                                <label for="nome"> Nome: </label>
                                <input type="text" name="nome" id="nome" class="validade">
                            </div>
                            <div class="input-field"> 
                                <i class="material-icons prefix">work</i>
                                <label for="cnpj"> CNPJ: </label>
                                <input type="text" name="cnpj" id="cnpj">
                            </div>
                            <div class="input-field"> 
                                <i class="material-icons prefix">fiber_smart_record</i>
                                <label for="registroCartorio"> Registro de cartório: </label>
                                <input type="text" name="registroCartorio" id="registroCartorio">
                            </div>
                            <div class="input-field">
                                <i class="material-icons prefix">location_city</i>
                                <label for="cidade"> Cidade: </label>
                                <input type="text" name="cidade" id="cidade">
                            </div>
                            <div class="input-field"> 
                                <i class="material-icons prefix">business</i>
                                <label for="setor"> Setor: </label>
                                <input type="text" name="setor" id="setor">
                            </div>
                            <div class="input-field"> 
                                <i class="material-icons prefix">mode_edit</i>
                                <label for="descricao"> Descrição: </label>
                                <textarea name="descricao" id="descricao" class="materialize-textarea"></textarea>
                            </div>
                            <div class="input-field">
                                <label align="center">
                                    <input type="checkbox" />
                                    <span>Concordo com os termos de uso</span>
                                  </label>
                            </div><br>
                            <div class="input-field" align="center"> 
                                <input type="submit" class="btn-large" value="Registrar"> 
                            </div>
                            <p align="center"> Deseja voltar ao home? <a href="home.php" class=""> Sim </a> </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        M.AutoInit();
    </script>
</body>
</html>