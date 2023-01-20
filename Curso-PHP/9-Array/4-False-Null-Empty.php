<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css" />
    <title>Extra</title>
</head>
<body>
<div>
 <?php
  $funcionario1 = null;
  $funcionario2= '';
  

  if(is_null($funcionario2)){
    echo "Sim, a variavel é null.";
  } else {
    echo "Não, a variavel não é null.";
  }

  echo "<br/> <hr/>";

  if(empty($funcionario1)){
    echo "Sim, a variavel está vazia.";
  } else {
    echo "Não, a variavel não está vazia.";
  }



 ?>
</div>    
</body>
</html>