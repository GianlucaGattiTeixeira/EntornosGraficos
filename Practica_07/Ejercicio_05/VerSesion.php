<?php session_start(); ?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="p-3">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul class="navbar-nav mr-auto">
                <li class="nav-link"><a href="VerSesion.php">Ver variables de sesion</a></li>
                <li class="nav-link"><a href="Formulario.html">Formulario</a></li>
            </ul>
        </nav>
        <p> usuario: <?php session_start(); echo $_SESSION['nombre']; ?></p>
        <p> contraseña: <?php echo $_SESSION['contrasena']; ?></p>
    </div>
</body>