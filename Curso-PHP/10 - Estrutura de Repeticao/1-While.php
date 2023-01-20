<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css" />
    <title>While</title>
</head>
<body>
<div>
 <?php
  $num = 1;
  while($num <= 10){
    echo "$num , ";
    $num += 2;
    
  }

 ?>

 <hr/>

 <h3>Exemplo 2</h3>
 <?php
  //Momentos que o break é útil
  $num1 = 0;
  while(true){
    echo "$num1 </br>";
    $num1 += 5;
    if($num1 > 100){
      break;
    }
  }
 ?>

<hr/>

 <h3>Exemplo 3</h3>
 <?php
 //Exemplo com continue

 $num2 = 1;
 while($num2 < 10){
  $num2++;

  if($num2 == 2 || $num2 == 6){
    continue;
  }

  echo "$num2 </br>";
 }
 ?>
</div>    
</body>
</html>