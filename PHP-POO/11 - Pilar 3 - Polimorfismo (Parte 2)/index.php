<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     require_once "Cachorro.php";

     $c = new Cachorro();
     $c->reagirFrase("olá");
     $c->reagirFrase("Vai dormir"); 

     $c->reagirHora(11,45);
     $c->reagirHora(15,00);
     $c->reagirHora(21,50);

     $c->reagirDono(true);
     $c->reagirDono(false);

     $c->reagirIdadePeso(2, 12);
     $c->reagirIdadePeso(11, 11);
    ?>
</body>
</html>