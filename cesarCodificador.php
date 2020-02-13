<?php

//Traemos las variables del index
@$codigo=$_POST['codigo'];
@$clave=$_POST['clave'];

//En este array introduces el alfabeto y lo conviertes en numeros
$julio=array (
"a"=>0, 
"b"=>1, 
"c"=>2, 
"d"=>3, 
"e"=>4, 
"f"=>5, 
"g"=>6, 
"h"=>7, 
"i"=>8, 
"j"=>9, 
"k"=>10, 
"l"=>11, 
"m"=>12, 
"n"=>13, 
"ñ"=>14, 
"o"=>15, 
"p"=>16, 
"q"=>17, 
"r"=>18, 
"s"=>19, 
"t"=>20, 
"u"=>21, 
"v"=>22, 
"w"=>23, 
"x"=>25, 
"y"=>25, 
"z"=>26 ) ; 

//CODIFICADOR
$cesar=array_flip($julio); 
echo "Mensaje original: ".$codigo."<br>"; 
echo "Mensaje codificado: ";
/*Desde 0 hasta el numero maximo del string introducido (por ejemplo hola seria 4)*/
for($i=0;$i<strlen($codigo);$i++) 
{ 
//Cifrado introduciria el numero de letras de codigo y le sumaria la clave
//
@$cifrado=(($julio[$codigo[$i]] + $clave))%27; 
echo strtoupper($cesar[$cifrado]); 
} 

?>

