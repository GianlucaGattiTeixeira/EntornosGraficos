<?php session_start(); 
 ?> 
<html> 
 <body> 
 <?php if (!isset($_SESSION["contador"]))
    {      $_SESSION["contador"] = 1;  
    }else{      
        $_SESSION["contador"]++;  } 
        ?> 
         <a href="visitas.php">Otra pagina</a> 
         </body> 
         
</html> 