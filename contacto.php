<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/tooplate-barista.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style2.css">
</head>

<body>
    <main>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="index.php">
                    <img src="img/logo.png" class="navbar-brand-image img-fluid" alt="logo">
                    Inicio
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="productos.php">Productos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="contacto.php">Contacto</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="acercade.php">Acerca de </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">Iniciar sesion</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_5">Compras</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </main>
    <div class="contacto">
        <h1>Contacto</h1>
    </div>
    <img src="img/Mapa.png" class="imagen-personalizada">
    <div class="ubicanos">
        <p>UBÍCANOS EN:</p>
    </div>
    <div class="calle">
        <p>Calle 9a. Pte Nte 314, Guadalupe, 29000 Tuxtla Gutiérrez, Chis.</p>
    </div>
    <div class="horario">
        <p>HORARIO:</p>
    </div>
    <div class="lunes">
        <p>Lunes a Viernes de 9:00 am a 2 pm</p>
    </div>
    <div class="telefono">
        <p>TELEFONO:</p>
    </div>
    <div class="tel">
        <p> 961-115-4655</p>
    </div>
    <h2>DÉJANOS UN MENSAJE</h2>

    <form action="enviar_contacto.php" method="post">
        <div class="nombre">
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" required class="form-input">
        </div>
        <div class="fecha">
            <label for="Fecha">Fecha:</label><br>
            <input type="text" id="Fecha" name="Fecha" required class="form-input">
        </div>
        <div class="mensaje">
            <label for="mensaje">Mensaje:</label><br>
            <textarea id="mensaje" name="mensaje" rows="4" cols="50" required class="form-textarea"></textarea>
        </div>
        <input type="submit" value="ENVIAR" class="form-submit">
    </form>
    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/vegas.min.js"></script>
    <script src="js/custom.js"></script>



</body>

</html>