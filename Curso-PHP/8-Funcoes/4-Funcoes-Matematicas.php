<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css" />
    <title>Funções Nativas para tarefas matemáticas</title>
</head>
<body>
<div>
 <?php
  $num = 7.3;

  echo $num . "</br>";
  echo "1° - ". ceil($num) . "</br>";

  echo "2° - ". floor($num) . "</br>";

  echo "3° - ". round($num) . "</br>";

  echo "4° - ". rand(10, 20) . " | ". getrandmax() ."</br>";

  echo "5° - ". sqrt($num) . "</br>";

 ?>
</div>    
</body>
</html>  