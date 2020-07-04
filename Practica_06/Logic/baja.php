<?php
    include("../conexion.php");
    //Captura datos desde el Form anterior
    $IdCiudad = $_POST['ciudad'];
    //Arma la instrucción SQL y luego la ejecuta
    
    $vSql = "DELETE FROM ciudades WHERE Id_Ciudad = $IdCiudad ";
    mysqli_query($link, $vSql) or die (mysqli_error($link));
    
    // Liberar conjunto de resultados
    //mysqli_free_result($vResultado);
    
    // Cerrar la conexion
    mysqli_close($link);
    header("location: http://localhost/Code/Practica_06/Presentation/listado.php");
?>