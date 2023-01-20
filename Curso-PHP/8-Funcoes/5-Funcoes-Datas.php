<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="_css/estilo.css" />
    <title>Funções Nativas para datas</title>
</head>
<body>
<div>
 <?php
   echo "1° - ". date('d/m/Y H:i') . "</br>";
   
   echo date_default_timezone_get();
   echo date_default_timezone_set('America/Sao_Paulo') . "</br> <hr/>";
   
   echo "2° - ". date('d/m/Y H:i') . "</br>";
   echo date_default_timezone_get() . "</br> <hr/>";

   echo "3° - Calculo de datas </br>";
   $data_inicial = '2022-03-02';
   $data_final = '2022-04-02';

   $time_inicial = strtotime($data_inicial);
   $time_final = strtotime($data_final);

   echo "Data Inicial: $data_inicial -  $time_inicial segundos </br>";
   echo "Data Final: $data_final  -  $time_final segundos </br>";

   $diferenca = $time_final - $time_inicial;
   echo "A diferença de segundos entre elas é $diferenca </br>";

   $segundos_dia = 24 * 60 * 60;
   echo "Um dia possui $segundos_dia segundos </br>";

   $diferenca_dias_entre_as_datas = $diferenca/$segundos_dia;
   echo "A diferença em dias entre as datas é ". round($diferenca_dias_entre_as_datas). " dias.";
 ?>
</div>    
</body>
</html>  