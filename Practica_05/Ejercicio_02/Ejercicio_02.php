<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $destinatario = "gianluk97@hotmail.com ";
    $asunto = "Prueba";
    $headers = "MIME-Version: 1.0\r\n"; 
    $headers = "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $cuerpo=$_POST["consulta"];
    //dirección del remitente 
    $headers = "From: Gianluca Gatti <gianlucagattiteixeira@g.com>\r\n";
    mail($destinatario,$asunto,$cuerpo,$headers);
}

?>