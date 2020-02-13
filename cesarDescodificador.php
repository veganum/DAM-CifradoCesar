<?php
//Traemos las variables del index 
@$decode=$_POST['decode'];
@$clave2=$_POST['clave'];



$julio2=array (
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


$cesar2=array_flip($julio2); 
echo "Mensaje original: ".$decode."<br>"; 
echo "Mensaje codificado: ";

for($i=0;$i<strlen($decode);$i++) 
{ 

@$descifrado=(($julio2[$decode[$i]] - $clave2))%27; 
echo strtoupper($cesar2[$descifrado]); 
} 


//MIRAR PARA METER FUNCIONES Y DESCODIFICAR

/*
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cifrado cesar</title>
</head>
<body>
<?php
function cesar($texto,$clave){
    for($i=0;$i<strlen($texto);$i++){
        $texto[$i]=chr(ord($texto[$i])+$clave);
    }
    return $texto;
}
$texto="SOY UNA PRUEBA";
$cifrado=cesar($texto,2);
echo $texto."<br>";
echo $cifrado."<br>";
$descifrado=cesar($cifrado,-2);
echo $descifrado."<br>";
?>
</body>
</html>
*/
     
?>