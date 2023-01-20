<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css" />
    <title>Desafio 1</title>
</head>
<body>
<div>
 <h3>Desafio 1 - Calculo de Imposto</h3>
 <?php
  function calcularImposto($salario){
    $imposto = 0;

    if($salario <= 1903.98){
        $imposto = 0;

    } else if ($salario >= 1903.99 && $salario <= 2826.65){
        $imposto = ($salario * 7.5)/100;

    } else if($salario >= 2826.66 && $salario <= 3751.05){
        $imposto = ($salario*15)/100;

    } else if($salario >= 3751.06 && $salario <= 4664.68){
       $imposto = ($salario*22.5)/100;
       
    } else {
        $imposto = ($salario*27.5)/100;       
    } 
    return $imposto;
  }
  echo "Você deverá pagar um imposto de ". calcularImposto(5000);
 ?>
</div>    
</body>
</html>