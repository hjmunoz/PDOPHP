<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Mvc</title>

    <!--Section Bootstrap-->
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--Section End-->


    <!--Font Awesone-->
    <script src="https://kit.fontawesome.com/7fa8e10a7c.js" crossorigin="anonymous"></script>
    <!--End Font Awesone-->
</head>

<body>
    <!--LOGO-->
    <div class="container-fluid">
        <h3 class="text-center py-3">
            LOGO
        </h3>
    </div>
    <!--END LOGO-->
    <!--BOTONES-->
    <div class="container-fluid bg-light">
        <div class="container">
            <ul class="nav nav-justified py-2 nav-pills">
<!-----------------------------
GET:$_GET['variable'] Variables que se pasan como parametros via url(
    tambien conocida como cadena de consulta a travez de url
    cuando es la primera variable se pasa con ?
    las que siguen se separan con &
)----------------------------------->
                <?php

                if (isset($_GET["pagina"])) : ?>
                    <?php if ($_GET["pagina"] == "registro") : ?>

                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=registro">Registro</a>
                        </li>

                    <?php endif ?>

                <?php endif ?>
                <?php

                if (isset($_GET["pagina"])) : ?>
                    <?php if ($_GET["pagina"] == "ingreso") : ?>

                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=ingreso">Ingreso</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
                        </li>

                    <?php endif ?>

                <?php endif ?>
                <?php

                if (isset($_GET["pagina"])) : ?>
                    <?php if ($_GET["pagina"] == "inicio") : ?>

                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
                        </li>

                    <?php endif ?>

                <?php endif ?>

                <?php if (isset($_GET["pagina"])) : ?>
                        <?php if ($_GET["pagina"]=="suma") : ?>
                            
                        <li class="nav-item">
                            <a class="nav-link activate" href="index.php?pagina=suma">Sumar</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=suma">Sumar</a>
                        </li>

                    <?php endif ?>

                    <?php endif?>

                <?php if (isset($_GET["pagina"])) : ?>
                    <?php if ($_GET["pagina"] == "salir") : ?>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=salir">Salir</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=salir">Salir</a>
                        </li>

                <?php endif ?>

                    
                        
                <?php else : ?>
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
                    <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=suma">Sumar</a>
                        </li>
                <?php endif ?>

                <!--Variable GET $_GET['variable'] es una variable que se pasa a traves de via URL 
                cuando es la primera variable se separa con ?, 
                despues se separa con &
                -->




            </ul>
        </div>
    </div>
    <!--END BOTONES-->
    <!--=============================================
        CONTENIDO
    ===============================================-->
    <div class="container-fluid">
        <div class="container">
            <?php

            //ISSET->es una funcion que determina si una variable viene o no vacia o es o no es null.
            if (isset($_GET["pagina"])) {

                if (
                    $_GET["pagina"] == "registro" ||
                    $_GET["pagina"] == "ingreso" ||
                    $_GET["pagina"] == "inicio" ||
                    $_GET["pagina"] == "salir" ||
                    $_GET["pagina"] == "suma"
                ) {
                    include "paginas/" . $_GET["pagina"] . ".php";
                }else {
                    
                    include "paginas/error404.php";

                }
            } else {

                include "paginas/registro.php";
            }



            ?>
        </div>
    </div>

    <!--=============================================
        ENDCONTENIDO
    ===============================================-->

</body>

</html>