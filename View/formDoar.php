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
                border: none;
                outline: none;
                font-family: Verdana, Geneva, sans-serif;
            }

            body {
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-image: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.9)), url('../Img/ongs.jpg'); 
                 /*background: url('../Img/fundo.jpg'); */
                border-radius: 40px;
            }

            .card {
                border-radius: 10px;
            }

            img {
                width: 100px;
                height: 100px;
            }

        </style>
    </head>
<body>
    <!-- -->
    <div class="container">
        <div class="row">
            <div class="col s12 m6 offset-m3">
                <form action="../Controller/login.php" method="POST">
                    <div class="card">
                        <div class="card-panel teal lighten-1 white-text">
                            <div class="avatar" align="center"> 
                                <i class="large material-icons"> attach_money </i>
                            </div>
                            <h4 align="center"> Realizar doação </h4>
                        </div> 
                        <div class="card-content">
                            <label> Selecione o método de pagamento: </label>
                            <div class="input-field">
                            <i class="material-icons prefix">credit_card</i>
                                <select name="doacao" id="doacao">
                                    <option value="volvo">Cartão crédito</option>
                                    <option value="saab">Cartão débito</option>
                                    <option value="mercedes">Boleto</option>
                                    <option value="mercedes">Dinheiro</option>
                                </select>
                            </div>
                            <div class="input-field"> 
                                    <i class="material-icons prefix">attach_money</i>
                                    <label for="telefone"> Valor da doação: </label>
                                    <input type="text" name="telefone" id="telefone">
                                </div>
                            <div class="input-field">
                                <label align="center">
                                    <input type="checkbox" />
                                    <span>Concordo com os termos de uso</span>
                                  </label>
                            </div><br><br>
                            <div class="input-field" align="center"> 
                                <input type="submit" value="Próxima etapa" class="btn-large">
                            </div>
                            <p align="center"> <a href="home.php" class=""> Voltar ao home </a> </p>
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