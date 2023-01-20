<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css" />
    <title>Arrays</title>
</head>
<body>
<div>
 <?php
 $lista_fruta = ['Banana','Maça','Morango', 'Uva'];
 $lista_fruta[] = 'Pera';
 
 echo "<pre>";
 echo var_dump($lista_fruta). "</br>";
 echo "</pre>";

 echo "<hr/>";

 echo "<pre>";
 print_r($lista_fruta);
 echo "</pre>";
 ?>

 </br> <hr/>
 <h3>Arrays Associativos</h3>
 <?php
  $lista_frutas = [
    'a' => 'Banana',
    'b' => 'Maça',
    'c' => 'Morango'
  ];

  $lista_frutas['w'] = 'Abacaxi';
  
  echo "<pre>";
  var_dump($lista_frutas);
  echo "</pre>";

  echo $lista_frutas['c'];
 ?>
</div>    
</body>
</html>