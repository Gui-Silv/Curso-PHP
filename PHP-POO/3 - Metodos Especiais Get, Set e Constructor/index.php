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
     require_once 'Caneta.php';

     $c1 = new Caneta("BIC", "Azul", 0.5);
     $c2 = new Caneta("Compactor", "Preta", 0.7);
   
     print_r($c1);
     echo "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()} de cor {$c1->getCor()}.";

     echo "<hr/>";

     print_r($c2);
     echo "Eu tenho uma caneta {$c2->getModelo()} de ponta {$c2->getPonta()} de cor {$c2->getCor()}.";
    ?>
    </pre>
</body>
</html>