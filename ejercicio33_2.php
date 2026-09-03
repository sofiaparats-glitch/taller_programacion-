<?php

function promedio_alumno($nota_1,$nota_2,$nota_3,){
$promedio=($nota_1+$nota_2+$nota_3)/3;
return $promedio;
}


$promedio=promedio_alumno(9,10,10);

echo "el promedio es".promedio_alumno(9,10,10);
echo "<br>";
echo "el promedio es".promedio_alumno(6,10,8);
echo "<br>";
echo "el promedio es".promedio_alumno(7,8,4);
echo "<br>";
echo "el promedio es".promedio_alumno(9,10,9);
echo "<br>";
echo "el promedio es".promedio_alumno(6,10,10);
echo "<br>";