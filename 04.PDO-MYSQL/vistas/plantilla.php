<?php 
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome script-->
    <script
      src="https://kit.fontawesome.com/a73d1dd50e.js"
      crossorigin="anonymous"
    ></script>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejemplo MVC</title>

  </head>
  <body>

    <!-- LOGO -->

    <div cass="container-fluid">

        <h3 class="text-center py-3">LOGO</h3>

    </div>

    <!-- MENU -->
    
    <div class="conteiner-fluid bg-light">

      <div class="container">

        <ul class="nav nav-justified py-2 nav-pills">


            <?php if(isset($_GET["pagina"])): ?>


                <?php if ($_GET["pagina"] == "registro"): ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?pagina=registro">Registro</a>
                    </li>
                <?php endif ?>


                <?php if ($_GET["pagina"] == "ingreso"): ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php?pagina=ingreso">Ingreso</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
                    </li>
                <?php endif ?>


                <?php if ($_GET["pagina"] == "inicio"): ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
                        </li>
                <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
                        </li>
                <?php endif ?>


                <?php if ($_GET["pagina"] == "salir"): ?>

                <li class="nav-item">
                    <a class="nav-link active" href="index.php?pagina=salir">Salir</a>
                </li>
                <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=salir">Salir</a>
                </li>
                <?php endif ?>


            <?php else: ?> 

                <li class="nav-item">
                    <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=salir">Salir</a>
                </li>

            <?php endif ?>


        </ul>

      </div>

    </div>

    <!-- CONTENIDO -->

    <div class="container-fluid py-5">
      
      <div class="container">

        <?php

            if(isset($_GET["pagina"])){

                if($_GET["pagina"] == "registro" || 
                   $_GET["pagina"] == "ingreso" ||
                   $_GET["pagina"] == "inicio" ||
                   $_GET["pagina"] == "salir" ){

                        include "paginas/" . $_GET["pagina"] . ".php";

                }

                else{

                    include "paginas/error404.php";

                }

            }else{

                include "vistas/paginas/registro.php";

            }

        ?>

      </div>

    </div>


  </body>
</html>
