<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css" />
    <title>Desafio Mega Sena</title>
</head>
<body>
<div>
<?php
  $num = [];
  do {
   echo $num[] = rand(1,60) ."</br> <hr/>";

  } while (count($num) < 6);                                                                                   
?>    
</div>    
</body>
</html>