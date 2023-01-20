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
    require_once "Ave.php";
    require_once "Mamifero.php";
    require_once "Reptil.php";
    require_once "Peixe.php";

    $m = new Mamifero();
    $c = new Canguru();
    $k = new Cachorro();

    $m->locomover();
    $c->locomover();
    $k->locomover();

  










    /*$a1 = new Mamifero();
    $a2 = new Reptil();
    $a3 = new Peixe();
    $a4 = new Ave();

    $a3->setPeso(4.3);
    $a1->setMembros(4);
    $a2->setcorEscama("Vermelha");

    $a1->alimentar();
    $a2->alimentar();
    $a3->alimentar();
    $a4->alimentar ();

    print_r($a1);
    print_r($a2);
    print_r($a3);
    print_r($a4);
    */
    ?>
    <pre>
</body>
</html>