<!DOCTYPE html>
<html>
    <head>
        <title> ONGs </title>
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
                background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.9)), url('../Img/ongs3.jpg'); 
                border-radius: 40px;
            }

            .nav {
                background: rgba(0, 0, 0, 0);
            }

            .nav a {
                color: #8fbdb7;
            }

            .nav .li a:hover {
                color: #79dbce;
            }

            .nav .btn {
                color: white;
            }

            .btn {
                border-radius: 5px;
            }

            .slider img {
                filter: opacity(30%);
            }

            .home {
                min-height: 70vh;
                color: black;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                text-align: center;
            }

            .btn-cad {
                border: 3px solid #00897b;
                border-radius: 10px;
                padding: 10px 20px;
                color: #caedec;
                transition: 1.5s;
                text-transform: uppercase;
            }

            .btn-cad:hover {
                background-color: #00897b;
            }

            /* Animação de fade-in na página */
            @-webkit-keyframes fadeIn {
                0% { 
                    opacity: 0; 
                }
                100% { 
                    opacity: 1; 
                } 
            }

                @-moz-keyframes fadeIn {
                0% { 
                    opacity: 0;
                }
                100% { 
                    opacity: 1; 
                }
            }
                
                @-o-keyframes fadeIn {
                0% { 
                    opacity: 0; 
                }
                100% { 
                    opacity: 1; 
                }
            }

                @keyframes fadeIn {
                0% { 
                    opacity: 0; 
                }
                100% { 
                    opacity: 1; 
                }
            }

            .fadeIn {
                -webkit-animation: fadeIn 2s ease-in-out;
                -moz-animation: fadeIn 2s ease-in-out;
                -o-animation: fadeIn 2s ease-in-out;
                animation: fadeIn 2s ease-in-out;
            }

            
        </style>
    </head>
<body class="fadeIn">
    <!-- -->
    <nav class="nav">
        <a class="brand-logo"> <img src=""> </a>
        <ul class="right list">
            <li class="li"> <a href="home.php"> Home </a> </li>
            <li class="li"> <a> Sobre </a> </li>
            <li class="li"> <a> Dúvidas </a> </li>
            <li class="li"> <a> Contato </a> </li>
            <li> <a class="waves-effect waves-light btn" href="logar.php"> Logar </a> </li>
        </ul>
    </nav>
    <section class="home">
        <h4> Um lugar onde doadores e ONGs se aproximam </h4>
        <h6> Crie sua conta e contribua.</h6><br>
        <a href="formDoador.php" class="btn-cad"> Cadastrar-se </a>
    </section> 

    <script>
        M.AutoInit();
    </script>
</body>
</html>
