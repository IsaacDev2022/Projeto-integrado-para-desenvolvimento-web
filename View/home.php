<?php 
    require_once "../Controller/ONG.php";
    require_once "../Models/OngDAO.php";
    require_once "../Models/Conexao.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <!-- Materialize CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
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

        </style>
    </head>
<body>
    <?php
    
    if (isset($_SESSION["doador"]) && !empty($_SESSION["doador"])) {

    ?>
        <ul id="slide-out" class="sidenav #e0f2f1 teal lighten-5">
            <li>
                <div class="user-view" align="center">
                    <a href="#user"><img class="circle" src="../Img/ongs4.jpg"></a>
                    <a href="#name"><span class="name"><?php echo $_SESSION["doador"]; ?></span></a>
                </div>
            </li>
            <li><a href="#!"><i class="material-icons">cloud</i>Perfil</a></li>
            <li><a href="home.php"><i class="material-icons">home</i>Home</a></li>
            <li><a href="formOng.php"><i class="material-icons">launch</i>Cadastrar ONG</a></li>
            <li><a href="formOng.php"><i class="material-icons">business</i>Listar por setor</a></li>
            <li><a href="formOng.php"><i class="material-icons">location_city</i>Listar por cidade</a></li>
            <li><a href="../Controller/deslogar.php"><i class="material-icons">subdirectory_arrow_left</i>Sair</a></li>
        </ul>
      <a href="#" data-target="slide-out" class="sidenav-trigger btn-floating btn-large"><i class="material-icons">account_circle</i></a> 
      

    <main>
        <div class="container">
          <?php 
                $ong = new ONG();
                $crud = new OngDAO();
                $lista = $crud->read();

                foreach ($lista as $lista) {
                 ?>
                    <div class="col">
                      <div class="col s6">
                        <div class="card horizontal blue-grey darken-1">
                          <div class="card-image">
                            <img src="../Img/ongs3.jpg" style="filter: grayscale(100%);">
                            <span class="card-title"><h3><?php echo $lista['nome']; ?></h3></span>
                          </div>
                          <div class="card-content white-text">
                            <h6> Setor: <?php echo $lista['setor']; ?></h6>
                            <h6> Cidade: <?php echo $lista['cidade']; ?></h6>
                            <h6> <span class="btn activator">Descrição:<i class="material-icons right">search</i></span> </h6>
                          </div>
                          <div class="card-reveal idenav #e0f2f1 teal lighten-5">
                              <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                              <?php echo $lista['descricao'] ?> 
                          </div> 
                          <div class="card-action">
                            <a href="ONG.php">Conhecer mais...</a>
                          </div>
                        </div>
                      </div>
                    </div>

                 <?php
              }
            ?>
        </div>
    </main>

    <script>
        M.AutoInit();
    </script>
</body>
</html>
    <?php } 
    
    else {
      echo "Usuário inválido";
      header("Location: logar.php");
    }
    ?>