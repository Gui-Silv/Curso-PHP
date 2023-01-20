<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css" />
    <title>Funções</title>
</head>
<body>
<div>
 <?php
  function calcularAreaTerreno($largura,$comprimento) {
    $area = $largura*$comprimento;

    return $area;
  }
  
  echo "A área do terreno é ". calcularAreaTerreno(4,8);
 ?>
</div>    
</body>
</html>