<?php  session_start(); ?> 
<html> 
    <body> 
    <a href="cuenta.php"></a>
     <?php echo "Has visitado " . ($_SESSION["contador"]) . " páginas";  ?> 
      <br>  <br> 
       <a href="add.php">Esta Página</a>  
    </body>     
</html