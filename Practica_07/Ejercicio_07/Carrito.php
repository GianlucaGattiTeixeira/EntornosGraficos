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
    session_start();
    if (!empty($_SESSION['carrito']))
    {
    ?>
    <h1 class="text-center">Carrito de compras</h1>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>Producto</th>
                <th>precio</th>
                <th>cantidad</th>
                <th ><th>    
            </tr>
        </thead >
        <tbody>
        <?php
        foreach($_SESSION['carrito'] as $c)
        { ?>
        <tr>
            <td><?php echo($c["id"]); ?></td>
            <td><?php echo($c["producto"]); ?></td>
            <td><?php echo($c["precio"]);?></td>
            <td colspan="2">
                <form action="./EditarCantidad.php" method="post" class="form-inline">
                    <div class="col-md-8">
                        <input  type="text" name="cantidad" value="<?php echo $c["cantidad"]; ?>">
                    </div>
                    <div class="col-md-4">
                        <input  type="hidden" name="idproducto"  value="<?php echo($c["id"]); ?>">
                        <input  type="submit" value="Editar Cantidad">
                    </div>
                </form>
            </td>
            <td>
                <form action="./EliminarDelCarrito.php" method="post">
                    <input type="hidden" name="idproducto"  value="<?php echo($c["id"]); ?>">
                    <input  type="submit" value="Eliminar del carrito">
                </form>
            </td>
        </tr>    
        <?php 
        }
        }?>
        <tbody>
    </table>
</body>