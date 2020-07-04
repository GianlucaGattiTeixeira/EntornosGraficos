<?php 
session_start();
if( ($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['idproducto']) && isset($_POST['cantidad']) )
{
    if (!empty($_SESSION['carrito']) && (isset($_SESSION['carrito'][$_POST['idproducto']]) ) )
    {
        $_SESSION['carrito'][$_POST['idproducto']]["cantidad"] = $_POST['cantidad'];
    }
}

$redirect = "location: ./Carrito.php";
header($redirect);
?>