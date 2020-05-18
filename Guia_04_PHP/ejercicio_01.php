<?php
    function doble($i) {
        return $i*2;
    } 
    $a = TRUE; //boolean
    $b = "xyz";//string
    $c = 'xyz';//string
    $d = 12;//integer
    echo " ",gettype($a); // construcción del lenguaje echo, sirve para mostrar variables en foema de string
    echo " ",gettype($b);
    echo " ",gettype($c);
    echo " ",gettype($d);
    echo "\n";
    if (is_int($d)) { //operador booleano if //funcion is_int recibe un parametro y devuelve si es int o no (TRUE)
         $d += 4; 
    } 
    if (is_string($a)) { //operador booleano if //funcion is_string recibe un parametro y devuelve si es string o no (FALSE)
         echo "Cadena: $a";
    }

    $d = $a ? ++$d : $d*3;
    echo "d= ",$d,"\n";
    $f = doble($d++);
    echo "d= ",$d,"\n";
    $g = $f   += 10;
    
    echo $a," ", $b," ", $c," ", $d," ", $f," ", $g;
    //a=TRUE
    //b=xyz
    //c=xyz
    //d=17
    //f=44
    //g=44
?> 