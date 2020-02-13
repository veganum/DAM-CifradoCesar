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