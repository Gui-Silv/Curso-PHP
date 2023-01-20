<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css" />
    <title>Métodos de pesquisa</title>
</head>
<body>
<div>
 <?php
  $lista_frutas = ['Banana', 'Maça', 'Uva'];

  echo "<pre>";
  echo print_r($lista_frutas);
  echo "</pre>";

  $existe = in_array('Abacate', $lista_frutas);

  if ($existe){
    echo "Sim, o valor pesquisado existe";
  } else {
    echo "O valor pesquisado não existe";
  }

  echo "<hr/> </br>";

  $existe1 = array_search('Abacate', $lista_frutas);
  if($existe != null){
    echo "Sim, o valor pesquisado existe";
  } else {
    echo "O valor não existe";
  }
 ?>
</div>    
</body>
</html>