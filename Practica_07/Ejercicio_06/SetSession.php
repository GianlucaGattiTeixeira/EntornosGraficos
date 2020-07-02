<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if ( isset($_POST['email']) )
        {
            
            include($_SERVER['DOCUMENT_ROOT']."/Codes/Entornos Graficos/Entornos Graficos/Practica_07/conexion.inc");
            $statement = "SELECT nombre_usuario FROM Usuarios WHERE email = '". $_POST['email']." ' ";
            $nombre = mysqli_query($link, $statement) or die (mysqli_error($link));
            $alumno = mysqli_fetch_assoc($nombre);
            $_SESSION['nombre'] = $alumno['nombre_usuario'];
        }
    }
?>
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
        <p> nombre: <?php echo $_SESSION['nombre'];?> </p>
    </div>
</body>