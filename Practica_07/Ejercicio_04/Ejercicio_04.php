<doctype HTML>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>form name</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    if (($_SERVER['REQUEST_METHOD'] === 'POST') && (isset($_POST['categoria'])) && !isset($_COOKIE['categoria']) ) 
    {
        //echo $_SERVER['REQUEST_METHOD'] ;
        //echo isset($_POST['categoria']);
        //echo !isset($_COOKIE['categoria']);

        setcookie('categoria', $_POST['categoria'],  time() + (86400), "/");
        
        echo "<h1>Titular de Política</h1>";
        echo "<h1>Titular de Economía</h1>";
        echo "<h1>Titular de Deportes</h1>";
    ?>
    <?php
    }
    elseif (isset($_COOKIE['categoria']))
    {
        echo "<h1>Titular de". $_COOKIE['categoria']. "</h1>" ;
    }
    else
    {
    ?>
        <h1>Titular de Política</h1>
        <h1>Titular de Economía</h1>
        <h1>Titular de Deportes</h1>
    <?php
    } 
    ?>
    <form action="./Ejercicio_04.php" method="post">
            <div>
                <input type="radio" id="politica" name="categoria" value="politica">
                <label for="politica">politica</label><br>
                <input type="radio" id="economia" name="categoria" value="economia">
                <label for="economia">Economía</label><br>
                <input type="radio" id="deporte" name="categoria" value="deporte">
                <label for="deporte">Deporte</label><br>
                <input type="submit" value="Submit">
            </div>
    </form>
    <p>click <a href="./DeleteCookie.php">aquí</a> para borrar cookies.</p>
</body