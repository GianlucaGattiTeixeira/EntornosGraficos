<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 8</title>        	    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    
 	<body>

<?php

$cancion = $_POST['cancion'];

$conn = include("./conexion.php");

$sentencia = "SELECT id,cancion,album,artista FROM buscador WHERE cancion LIKE '%".$cancion."%' ORDER BY id asc";
$resultado = mysqli_query($link, $sentencia) or die (mysqli_error($link));
$total_registros = mysqli_num_rows($resultado);

if ($total_registros>0) {
?>
    <div class="container">
        <form action="seleccionado.php" method="post">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Cancion</th>
                    <th scope="col">Album</th>
                    <th scope="col">Artista</th>
                    </tr>
                </thead>

                <tbody>

<?php
while ($fila = mysqli_fetch_array($resultado))
{
?>
                    <tr>
                    <td><?php echo ($fila['id']); ?></td>
                    <td><?php echo ($fila['cancion']); ?></td>
                    <td><?php echo ($fila['album']); ?></td>
                    <td><?php echo ($fila['artista']); ?></td>  
                    </tr>

                    
<?php
}
?>
                </tbody>
            </table>
        </form>
        
        <div class="form-group">
            <div class="col-md-12">
                <a href="principal.html" class="btn btn-primary">Menu principal</a>           
            </div>
        </div>
    </div>

<?php
} else {
?>

<div class="container">
        <div class="form-group col-md-12">
            <br/>
            <h3>Error:</h3>
            <p>La cancion ingresada no existe</p>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <a href="principal.html" class="btn btn-primary">Menu principal</a>           
            </div>
        </div>
    </div>


<?php
}
mysqli_free_result($resultado);
mysqli_close($link);
?>
</body>

</html>