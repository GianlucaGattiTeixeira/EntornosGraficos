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
    include("../conexion.php");
    $statement = "SELECT * FROM ciudades";
    $ciudades = mysqli_query($link, $statement) or die (mysqli_error($link));
    ?>
    <table>
        <tr>
        <th>Nombre ciudad</th>
        <th>Pais</th>
        <th>Habitantes</th>
        <th>superficie</th>
        <th>metro</th>
        <th></th>
        <th></th>
        </tr>
        <?php
        foreach($ciudades as $c)
        {
            if($c['Metro'] == '1')
            {
                $metro ='Si';
            }else
            {
                $metro ='No';
            }
        ?>
        <tr>
            <td><?php echo($c["Nombre_ciudad"]); ?></td>
            <td><?php echo($c["Pais"]); ?></td>
            <td><?php echo($c["Habitantes"]);?></td>
            <td><?php echo($c["Superficie"]);?></td>
            <td><?php echo($metro);?></td>
            <td>
                <form action="../Logic/baja.php" method="post">
                    <input type="hidden" name="ciudad"  value="<?php echo($c["Id_Ciudad"]); ?>">
                    <input class="DeleteButton" type="submit" value="borrar">
                </form>
            </td>
            <td>
                <form action="./edit.php" method="post">
                    <input type="hidden" name="ciudad"  value="<?php echo($c["Id_Ciudad"]); ?>">
                    <input class="EditButton" type="submit" value="editar">
                </form>
            </td>
        </tr>    
    <?php 
    }
    ?>
    </table>
</body>