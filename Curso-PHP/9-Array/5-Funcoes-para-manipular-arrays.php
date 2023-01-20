<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css" />
    <title>Funções para manipular arrays</title>
</head>
<body>
<div>
 <?php
  $array = [1 => 'a', 7 => 'b', 18 => 'c'];
  $retorno = is_array($array);

  if($retorno){
    echo "1° - É um array.";
  } else {
    echo "1° - Não é um array.";
  }

  echo "<hr/>";
  echo "<h3>2°<h3/>";
  $chaves_array = array_keys($array);
  echo "<pre>";
   print_r($chaves_array);
  echo "</pre>"; 

  echo "<hr/>";
  
  echo "<h3>3°<h3/>";
  $objeto = ['Mouse', 'Cabo Hdmi', 'Gabinete','Notebook','Teclado'];
  echo '<pre>';
   print_r($objeto);
  echo '</pre>'; 

  sort($objeto);
  echo "<h4>Ordenado:</h4>";
  echo '<pre>';
   print_r($objeto);
  echo '</pre>'; 

  echo "<hr/>";
  
  echo "<h3> 4° <h3/>";
  $objeto1 = ['Mouse', 'Cabo Hdmi', 'Gabinete','Notebook','Teclado'];
  echo '<pre>';
   echo count($objeto1);
  echo '</pre>'; 

  echo "<hr/>";
  
  echo "<h3> 5° <h3/>";
  $nome1 = ['Guilherme','Ana','Giovana'];
  $nome2 = ['Gustavo','Ariel'];

  $novo_array = array_merge($nome1,$nome2);
  echo '<pre>';
   print_r($novo_array);
  echo '</pre>';

  echo "<hr/>";
  
  echo "<h3> 6° <h3/>";
  $string = '26/04/2022';
  $array_retorno = explode('/', $string);
  echo '<pre>';
   print_r($array_retorno);
  echo '</pre>';

  echo "<hr/>";
  
  echo "<h3> 7° <h3/>";
  $letras = ['a','b','x','y'];
  $string_retorno = implode(',',$letras);
  echo '<pre>';
   print_r($string_retorno);
  echo '</pre>';



 ?>
</div>    
</body>
</html>