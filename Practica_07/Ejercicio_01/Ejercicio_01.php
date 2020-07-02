<!DOCTYPE html>
<?php
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
        
        setcookie("text_style", $_POST['style'], time() + (86400), "/");
    }
    else
    {
        setcookie("text_style", "blue", time() + (86400), "/");
    }
    echo $_COOKIE["text_style"];
?>
<head>
    <style>
        p
        {
            background-color: <?php echo $_COOKIE["text_style"];?>;
        }
    </style>
</head>
<body>
    <p>el color de esto define lo seleccionado en el form anterior</p>
</body>


