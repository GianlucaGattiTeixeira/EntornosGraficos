<?php 
session_start();
if( ($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['idproducto']) )
{
    if (!empty($_SESSION['carrito']) && (isset($_SESSION['carrito'][$_POST['idproducto']]) ) )
    {
        unset($_SESSION['carrito'][$_POST['idproducto']]);
        echo "unset";
    }
}


$redirect = "location:http://localhost/Codes/Entornos Graficos/Entornos Graficos/Practica_07/Ejercicio_07/Carrito.php";
header($redirect);
?>