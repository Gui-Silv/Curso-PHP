<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <pre>
   <?php
   require_once 'ContaBancaria.php';

   $p1 = new ContaBancaria(); //Jubileu
   $p2 = new ContaBancaria(); //Creuza
  
   $p1->abrirConta("CP");
   $p1->setDono("Jubileu");
   $p1->setnumConta(1169);
   print_r($p1);

   echo "<hr/>";

   $p2->abrirConta("CC");
   $p2->setDono("Creuza");
   $p2->setnumConta(6874);
   print_r($p2);

   echo "<hr/>";
    
   $p1->depositar(15489);
   $p2->depositar(1000);
   $p2->sacar(400);
   print_r($p1);
   print_r($p2);



  
   ?>  
   </pre>    
</body>
</html>