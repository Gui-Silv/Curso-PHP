<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css" />
    <title>Switch</title>
</head>
<body>
<div>   
<?php
 $r = $_GET["regiao"]
 switch($r){
    case 1:
      $lugar = "Norte";
      break;  
    case 2:
      $lugar = "Nordeste";
      break;
    case 3:
      $lugar = "Centro-Oeste";
      break;
    case 4:
      $lugar = "Sudeste";
      break;
    case 5:
      $lugar = "Sul";
      break;
    default
      $lugar = "Digite um estado válido";               
 }

 echo "Você reside na região $lugar"
?>
</div>    
</body>
</html>
