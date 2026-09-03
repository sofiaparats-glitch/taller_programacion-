<?php

function saludo(){
    echo "hola, mi nombre es:Mateo";
}

echo saludo();
echo "<br>";


function saludo2($nombre){
    return "hola, mi nombre es:$nombre";
}

echo saludo("Mateo");
echo "<br>";


$usuario="Ashley";
echo saludo($usuario);
echo "<br>";

echo saludo($nombre="carlos");