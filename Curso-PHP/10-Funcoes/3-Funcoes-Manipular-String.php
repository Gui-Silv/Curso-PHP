<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css" />
    <title>Funções Nativas para manipular Strings</title>
</head>
<body>
<div>
 <?php
  $texto = "Curso Completo de PHP";

  echo $texto . "</br>";
  echo "1° - ". strtolower($texto) . "</br>";

  echo "2° - ". strtoupper($texto) . "</br>";

  echo "3° - ". ucfirst($texto) . "</br>";

  echo "4° - ". strlen($texto) . "</br>";

  echo "5° - ". str_replace('PHP', 'JavaScript', $texto) . "</br>";

  echo "6° - ". substr($texto, 0 , 7) . "</br>";
 ?>
</div>    
</body>
</html>
