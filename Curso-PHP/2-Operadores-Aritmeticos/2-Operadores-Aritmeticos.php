<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css" />
    <title>Operadores Aritméticos</title>
</head>
<body>
<div>    
 <?php
  $n1 = 3;
  $n2 = 4;
  $m = ($n1 + $n2)/2;

   echo "A soma de $n1 e $n2  é ". ($n1+$n2);
   echo "<br/> A media de $n1 e $n2 vale $m";

   echo "<hr/>";

   $n1 = $_GET["a"];
   $n2 = $_GET["b"];
   echo "Valores recebidos: $n1 e $n2";

   echo "<hr/>";
   echo "Funções Aritmeticas <br/>";
    $v1 = 10;
    $v2 = 2;
    $v3 = 13.976;
    echo "Valores recebidos $v1 e $v2";
    echo "<br/>";

   echo "O valor absoluto de $v2 é " . abs($v2). "<br/>";
   echo "O valor de $v1<sup>$v2<sup/> é ". pow($v1,$v2). "<br/>";
   echo "A raiz de $v1 é " . sqrt($v1) . "<br/>";
   echo "O valor de $v3 arrendodado é ". round($v3). "<br/>";
   echo "A parte inteira de $v3 é ". intval($v3) . "<br/>";
   echo "O valor de $v1 em moeda é R$". number_format($v1,2);
   
   
 ?> 
</div> 
</body> 
</html> 