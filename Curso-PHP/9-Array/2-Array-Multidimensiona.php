<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css" />
    <title>Arrays Multidimensionais</title>
</head>
<body>
<div>
 <?php
  $lista_coisas = [];

  $lista_coisas['frutas'] = [1 => 'Banana', 2 => 'Maça', 3 => 'Morango'];

  $lista_coisas['pessoas'] = [1 => 'João', 2 => 'José', 3 => 'Maria'];

  echo "<pre>";
  print_r($lista_coisas);
  echo "</pre>";

  echo "</hr>";
  echo $lista_coisas['pessoas'][2];
 ?>
</div>    
</body>
</html>