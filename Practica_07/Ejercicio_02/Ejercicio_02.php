<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        
        if (isset($_COOKIE["contador"])) 
        {
            echo "<p>Bienvenido por ".$_COOKIE["contador"] . " vez en 24 hs</p>";
            setcookie("contador", ++$_COOKIE["contador"], time() + (86400), "/");
        }
        else
        {
            echo "<p>Bienvenido por primera vez en 24 hs</p>";
            setcookie("contador", 1, time() + (86400), "/");
        }
        
    ?>
</body>

