<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav mr-auto">
            <li class="nav-link"><a href="Listado.php">Listado</a></li>
            <li class="nav-link"><a href="Carrito.php">Carrito</a></li>
        </ul>
    </nav>  
    <?php 
        include("./conexion2.php");
        $statement = "SELECT * FROM catalogo";
        $ciudades = mysqli_query($link, $statement) or die (mysqli_error($link));
    ?>
    <h1 class="text-center">Listado de productos</h1>
    <table class="table table-striped">
        <tr>
            <th>id</th>
            <th>Producto</th>
            <th>precio</th>
            <th></th>
        </tr>
        <?php
        foreach($ciudades as $c)
        { ?>
        <tr>
            <td><?php echo($c["id"]); ?></td>
            <td><?php echo($c["producto"]); ?></td>
            <td><?php echo($c["precio"]);?></td>
            <td>
                <form action="./Detalle.php" method="post">
                    <input type="hidden" name="idproducto"  value="<?php echo($c["id"]); ?>">
                    <input  type="submit" value="Añadir al carrito">
                </form>
            </td>
        </tr>    
    <?php 
    }
    ?>
    </table>
</body>