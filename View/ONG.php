<!DOCTYPE html>
<html>

<head>

    <title> Página da ONG </title>
    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <meta charset="utf-8">
    <style>
        * {
            margin: 0;
            padding: 0px;
            font-family: Verdana, Geneva, sans-serif;
        }

        body {
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-image: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.9)), url('../Img/ongs3.jpg');
        }

        .container {
            width: 100%;
            margin-bottom: 10px;
            margin-top: 30px;
        }

        .card {
            padding: 10px;
        }

        .container-carousel {
            margin: 50px;
        }

    </style>
</head>

<body>
    <!-- -->
    <div class="container">
        <div class="row">
            <div class="col s12 m10 offset-m1">
                <div class="card">
                    <h3> Título da ONG
                        <hr>
                    </h3>
                    <h6> Fotos: </h6>
                    <div class="container-carousel">
                        <div class="carousel carousel-slider">
                            <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/800/400/food/1"></a>
                            <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/800/400/food/2"></a>
                            <a class="carousel-item" href="#three!"><img
                                    src="https://lorempixel.com/800/400/food/3"></a>
                            <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/800/400/food/4"></a>
                        </div>
                    </div>
                        <h6> História: </h6> <hr>
                        <h6> CNPJ: </h6> <hr>
                        <h6> Registro de cartório: </h6> <hr>
                        <h6> Cidades: </h6> <hr>
                        <h6> Localização: </h6> <hr> <br><br>

                        <a href="home.php" class="btn"> Voltar</a>
                        <a href="formDoar.php" class="btn orange"> Realizar doação </a>
                </div>
            </div>
        </div>

        <script>
            M.AutoInit();
        </script>
</body>

</html>