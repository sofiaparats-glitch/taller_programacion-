<?php

$fecha_1="2021/11/29";
$fecha_2="2021-11-30";
$numeros="uno dos tres cutro cinco seis siete";

explode(delimitador,string,limitador);
$array_fecha=explode("/"string);
$array_fecha=explode("/",$fecha_1);
$array_fecha=explode("-",$fecha_2);


echo $array_fecha[0];
echo $array_fecha[1];
echo $array_fecha[2];

$array_fecha=explode("",$numeros,2);
echo $array_numero[1];