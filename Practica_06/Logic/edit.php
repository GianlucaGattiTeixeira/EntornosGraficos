<?php
    include("../conexion.php");
    //Captura datos desde el Form anterior
    $IdCiudad = $_POST['ciudad'];
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

    //$vSql = "UPDATE doc_utn set legajo='$vClave', apel_nom='$vUsuario', email='$vEmail' where dni='$vDNI'";
    //mysqli_query($link,$vSql) or die (mysqli_error($link));

    $vSql = "   UPDATE ciudades 
                SET Nombre_ciudad='$nomciudad',Pais = ' $pais', Habitantes = '$habitantes',Metro = '$metro',Superficie = '$superficie'
                WHERE  Id_Ciudad = $IdCiudad ";
    mysqli_query($link, $vSql) or die (mysqli_error($link));
    
    // Liberar conjunto de resultados
    //mysqli_free_result($vResultado);
    
    // Cerrar la conexion
    mysqli_close($link);
    header("location: ../Presentation/listado.php"); //replace this with the actual location
?>
