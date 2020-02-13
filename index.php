<!DOCTYPE html>
<html>

<head>
    <title>Cifrado Cesar</title>
</head>
<style>
    html {
        background-image: url("cesarMuerte.jpg") ;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center; 
        height: 100%;
        
    }  
    
      div {
        background: white;
        border: 2px solid black;
        border-radius: 5px;
        margin-right: 200px;
        margin-left: 200px;
        
    } 
    
   

</style>

<body>
    <div>
        <h1>
            <center>
                <p><u>CIFRADO CESAR</u></p>
            </center>
        </h1>
        <center>
            <h3><u><center>Codificador</center></u></h3>
            
            <form action="cesarCodificador.php" method="post">
                
                Introduce el mensaje a cifrar: <input type="text" name="codigo"><br><br>
                Clave del mensaje:
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                <input type="text" name="clave">
                
                
                <br><br>

                <input type="submit" name="boton" value="CIFRAR">
           
                <br><br>
                <hr>
 <!--IPMB-->               
                 <h3><u><center>Descodificador</center></u></h3>
                 <form action="cesarDescodificador.php" method="post">
                
                Introduce el mensaje a descifrar: <input type="text" name="decode"><br><br>
                  
                <input type="submit" name="decodeBoton" value="DESCIFRAR">
                <br><br><hr>
                <input type="reset" value="BORRAR" >
                <br><br>
            </form>
                
                
                
            </form>

        </center>
    </div>

</body>

</html>
