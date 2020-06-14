<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <ul id="navbar">
        <li><a href="alta.html">alta</a></li>
        <li><a href="listado.php">listado</a></li>
    </ul>
    <?php 
        if (isset($_POST['ciudad']))
        {
            $CiudadId = $_POST['ciudad'];
            include($_SERVER['DOCUMENT_ROOT']."/code/conexion.inc");

            $statement = "SELECT * FROM ciudades WHERE $CiudadId = Id_Ciudad";
            $result = mysqli_query($link, $statement) or die (mysqli_error($link));
            $c = mysqli_fetch_array($result);
            mysqli_close($link);
    ?>
            <form action="../logic/edit.php" method="post" class="form-input">
                <input type="hidden" name="ciudad" value="<?php echo($CiudadId); ?>">
                <div>
                    <label for="nombre_ciudad">name</label><br>
                    <input type="text" name="nombre_ciudad" value="<?php echo($c["Nombre_ciudad"]); ?>">
                </div>
                <div>
                    <label for="nombre_pais">pais</label><br>
                    <input type="text" name="nombre_pais"  value="<?php echo($c["Pais"]); ?>">
                </div>
                <div>
                    <label for="habitantes">habitantes</label><br>
                    <input type="text" name="habitantes"  value="<?php echo($c["Habitantes"]);?>">
                </div>
                <div>
                    <label for="superficie">superficie</label><br>
                    <input type="text" name="superficie" value="<?php echo($c["Superficie"]);?>">
                </div>
                <div>
                    <label for="superficie">tiene metro</label><br>
                    <input type="checkbox" name="metro">
                </div>
                <div>
                    <input class="CreateButton" type="submit" >
                </div>
            </form>
    <?php
        }
        else
        {
            echo("<p>no se especifico la ciudad a editar");
        }
    ?>