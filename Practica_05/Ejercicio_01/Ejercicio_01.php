<?php
$destinatario = "danidruetta_97@hotmail.com ";
$asunto = "Prueba";
$cuerpo = "
    <html>
        <head>
            <title>HTML</title>
        </head>
        <body>
            <h1>Ejercicio 1</h1>
            <p>Te estoy enviando un HTML</p>
        </body>
    </html>";

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers = "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers = "From: Gianluca Gatti <gianlucagattiteixeira@gmail.com>\r\n";
mail($destinatario, $asunto, $cuerpo, $headers);
?>