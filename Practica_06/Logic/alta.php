<?php
    include("../conexion.php");//replace the second part with the actual location
    //Captura datos desde el Form anterior
    $nomciudad = $_POST['nombre_ciudad'];
    $pais = $_POST['nombre_pais'];
    $habitantes = $_POST['habitantes'];
    $superficie = $_POST['superficie'];
    if (isset($_POST['metro']))
    {
        $metro = 1;
    }
    else
    {
        $metro = 0;
    }
    //Arma la instrucción SQL y luego la ejecuta
    
    $vSql = "INSERT INTO ciudades (Nombre_ciudad,Pais,Habitantes,Metro,Superficie)
    values ('$nomciudad','$pais', '$habitantes','$metro', '$superficie')";
    mysqli_query($link, $vSql) or die (mysqli_error($link));
    
    // Liberar conjunto de resultados
    //mysqli_free_result($vResultado);
    
    // Cerrar la conexion
    mysqli_close($link);
    header("location: http://localhost/Code/Practica_06/Presentation/alta.html"); //replace this with the actual location
?>
