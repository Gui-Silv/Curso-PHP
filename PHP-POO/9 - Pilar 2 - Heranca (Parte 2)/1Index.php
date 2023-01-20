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
    require_once "Pessoa.php";
    require_once "Aluno.php";
    require_once "Visitante.php";


    $p = new Visitante();
    $a = new Aluno();
    $b = new Bolsista();

    $p->setNome("Juvenal");
    $p->setIdade(33);

    $a->setNome("Emilio");
    $a->setMatr(565);
    $a->setIdade(42);
    $a->setCurso("História");
    $a->setSexo("Não Binarie");

    $b->setNome("Emanuel");
    $b->setMatr(354);
    $b->setBolsa(12.5);
    $b->setCurso("Informática");
    $b->pagarMensalidade();

    print_r($p);
    print_r($a);
    print_r($b);
    ?>
    <pre>
</body>
</html>