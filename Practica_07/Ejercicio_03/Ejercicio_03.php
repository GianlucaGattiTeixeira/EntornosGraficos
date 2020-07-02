<doctype HTML>
<head>
    <title>form name</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    if (($_SERVER['REQUEST_METHOD'] === 'POST') && (isset($_POST['nombre'])) && ($_POST['nombre'] != "")) 
    {
        echo "El usuario es " . $_POST['nombre'];
        setcookie('nombre', $_POST['nombre'],  time() + (86400), "/");
    }
    elseif (isset($_COOKIE['nombre']))
    {
        echo "El usuario es " . $_COOKIE['nombre'];
    }
    else
    {
        echo "Todavía no se ha seteado usuario";
    }
    ?>
    <form action="./Ejercicio_03.php" method="post">
            <div>
                <label for="nombre">Nombre</label><br>
                <input type="text" id="nombre" name="nombre">
                <input type="submit" value="Submit">
            </div>
    </form>
</body