<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visibilidade de um objeto</title>
</head>
<body>
    <?php
     require_once 'Caneta.php';
     $c1 = new Caneta;
     $c1->modelo = "Bic";
     $c1->cor = "Azul";
     //$c1->ponta = 0.5;
     //$c1->carga = 99;

     echo '<pre>';
     print_r($c1);
     echo '</pre>';

     $c1->rabiscar();
     $c1->tampar();

     echo '<pre>';
     print_r($c1);
     echo '</pre>';


    ?>
</body>
</html>