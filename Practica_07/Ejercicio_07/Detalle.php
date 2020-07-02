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
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['idproducto']))
        {
            include($_SERVER['DOCUMENT_ROOT']."/Codes/Entornos Graficos/Entornos Graficos/Practica_07/conexion2.inc");
            $statement = "SELECT * FROM catalogo Where id = " . $_POST['idproducto'];
            $p = mysqli_query($link, $statement) or die (mysqli_error($link));
            $c = mysqli_fetch_assoc($p);
        }
    ?>
    <table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad<th>
            <th></th>
        </tr>
        <tr>
            <td><?php echo($c["id"]); ?></td>
            <td><?php echo($c["producto"]); ?></td>
            <td><?php echo($c["precio"]);?></td>
            <td colspan="2">
                <form action="./Add.php" method="post" class="form-inline">
                    <div class="col-md-8">
                        <input  type="text" name="cantidad">
                    </div>
                    <div class="col-md-4">
                        <input  type="hidden" name="idproducto"  value="<?php echo($c["id"]); ?>">
                        <input  type="submit" value="Añadir al carrito">
                    </div>
                </form>
            </td>
        </tr>    
    </table>
</body>