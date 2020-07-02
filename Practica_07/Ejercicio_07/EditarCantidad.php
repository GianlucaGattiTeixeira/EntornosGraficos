<?php 
session_start();
if( ($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['idproducto']) && isset($_POST['cantidad']) )
{
    if (!empty($_SESSION['carrito']) && (isset($_SESSION['carrito'][$_POST['idproducto']]) ) )
    {
        $_SESSION['carrito'][$c['idproducto']]["cantidad"] = $_POST['idproducto'];
    }
}

$redirect = "location:http://localhost/Codes/Entornos Graficos/Entornos Graficos/Practica_07/Ejercicio_07/Carrito.php";
header($redirect);
?>