<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $destinatario = $_POST["destinatario"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $asunto = "Prueba";
        $headers = "MIME-Version: 1.0\r\n"; 
        $headers = "Content-type: text/html; charset=iso-8859-1\r\n"; 
        $cuerpo="visita esta pagina por recomendacion de:". $nombre . " " . $apellido ;
        //dirección del remitente 
        $headers = "From: Gianluca Gatti <gianlucagattiteixeira@g.com>\r\n";
        mail($destinatario,$asunto,$cuerpo,$headers);
    }
    
?>