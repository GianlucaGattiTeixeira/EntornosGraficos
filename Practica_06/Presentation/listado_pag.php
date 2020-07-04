<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title> Listados completo con paginacion </title>
</head>
<body>
    <ul id="navbar">
        <li><a href="alta.html">alta</a></li>
        <li><a href="listado.php">listado</a></li>
    </ul>
    <?php
    include("../conexion.php");
    $Cant_por_Pag = 2;
    $pagina = isset ( $_GET['pagina']) ? $_GET['pagina'] : null ;
    if (!$pagina) 
    {
        $inicio = 0;
        $pagina=1;
    }
    else 
    {
        $inicio = ($pagina - 1) * $Cant_por_Pag;
    }// total de páginas
    $vSql = "SELECT * FROM ciudades";
    $vResultado = mysqli_query($link, $vSql);
    $total_registros=mysqli_num_rows($vResultado);
    $total_paginas = ceil($total_registros/ $Cant_por_Pag);
    echo "Numero de registros encontrados: " . $total_registros . "<br>";
    echo "Se muestran paginas de " . $Cant_por_Pag . " registros cada una<br>";
    echo "Mostrando la pagina " . $pagina . " de " . $total_paginas . "<p>";
    $vSql = "SELECT * FROM ciudades"." limit " . $inicio . "," . $Cant_por_Pag;
    $vResultado = mysqli_query($link, $vSql);
    $total_registros=mysqli_num_rows($vResultado);
    ?>
    <table >
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
    while ($c = mysqli_fetch_array($vResultado))
    { if($c['Metro'] == '1'){
        $metro ='Si';
    }else{
        $metro ='No';
    }
    ?>
    <tr>
        <td><?php echo($c["Nombre_ciudad"]); ?></td>
        <td><?php echo($c["Pais"]); ?></td>
        <td><?php echo($c["Habitantes"]);?></td>
        <td><?php echo($c["Superficie"]);?></td>
        <td><?php echo("NA");?></td>
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
    <tr>
    <td colspan="5">

    <?php
    }
    // Liberar conjunto de resultados
    mysqli_free_result($vResultado);
    // Cerrar la conexion
    mysqli_close($link);
    ?>
    </td>
    </tr>
    </table>
    <?php
    if ($total_paginas > 1)
    {
        for ($i=1;$i<=$total_paginas;$i++)
        {
            if ($pagina == $i)
            {
                //si muestro el índice de la página actual, no coloco enlace
                echo ("<p align='center'>". $pagina . " ");
            }
            else
            {
                //si la página no es la actual, coloco el enlace para ir a esa página
                echo "<a href='listado_pag.php?pagina=" . $i ."'>" . $i . "</a></p> ";
            }
        }
    }
    ?>
</body>
</html>