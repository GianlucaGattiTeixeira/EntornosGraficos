<?php
session_start();
if( ($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['idproducto']) && isset($_POST['cantidad']) )
{
    include($_SERVER['DOCUMENT_ROOT']."/Codes/Entornos Graficos/Entornos Graficos/Practica_07/conexion2.inc");
    $statement = "SELECT * FROM catalogo Where id = " . $_POST['idproducto'];
    $p = mysqli_query($link, $statement) or die (mysqli_error($link));
    $c = mysqli_fetch_assoc($p);

    $product = array();
    $product['id'] = $c['id'];
    $product['producto'] = $c['producto'];
    $product['precio'] = $c['precio'];
    $product['cantidad'] = $_POST['cantidad'];
    
    echo $_SESSION['carrito']["1"]["id"];
    echo $_SESSION['carrito']["1"]["cantidad"];
    if (!empty($_SESSION['carrito']))
    {
        if(isset($_SESSION['carrito'][$c['id']]))
        {
            echo 'entro';
            $_SESSION['carrito'][$c['id']]['cantidad'] += $_POST['cantidad'];
        }
        else
        {
            echo 'no entro';
            $_SESSION['carrito'][$c['id']] = $product;
        }
    }
    else 
    {
        echo "else";
        $_SESSION['carrito'] = array();
        $_SESSION['carrito'][$c['id']] = $product;
    }
}
$redirect = "location:http://localhost/Codes/Entornos Graficos/Entornos Graficos/Practica_07/Ejercicio_07/Carrito.php";

header($redirect);
?>
    