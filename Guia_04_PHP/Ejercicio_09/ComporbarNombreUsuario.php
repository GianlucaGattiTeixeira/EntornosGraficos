
<?php
    function comprobar_nombre_usuario($nombre_usuario){
        //compruebo que el tamaño del string sea válido. 
        if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20)
        {
            echo $nombre_usuario . " no es válido<br>"; 
            return false; 
        } 
        
        //compruebo que los caracteres sean los permitidos
        //Recorre el string enviado cmo nombre de usuario caracter por caracter

        //Si el caracter en la posicion indicada no es un sub-string de longitud 
        //uno de $permitidos, escibe que no es valido

        //Si recorre el strig sin que lo anterir suceda retorna verdadero
    
        $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_"; 
        for ($i=0; $i<strlen($nombre_usuario); $i++)
            { 
                if (strpos($permitidos, substr($nombre_usuario,$i,1))===false)
                { 
                    echo $nombre_usuario . " no es válido<br>"; 
                    return false; 
                } 
            } 
        echo $nombre_usuario . " es válido<br>"; 
        return true; 
    }
?>

<html>
    <?php //LLamo a la funcion, le paso el parametro "nombre" del post ?>
    <?php comprobar_nombre_usuario($_POST['nombre'])?>
</html>