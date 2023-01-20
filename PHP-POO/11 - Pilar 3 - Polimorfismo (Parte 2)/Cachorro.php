<?php
 class Cachorro {
    public function reagirFrase($frase){
     if($frase == "toma comida" || $frase == "olá"){
        echo "<p>Abanar e Latir</p>";
     } else {
        echo "Rosnar";
     }
    }

    public function reagirHora($hora, $min){
      if($hora < 12){
        echo "<p>Abanar</p>";
      } elseif ($hora >= 18) {
        echo "<p>Ignorar, tardão já</p>";
      } else {
        echo "<p>Abanar e latir</p>";
      } 
    }

    public function reagirDono($dono){
     if($dono){
        echo "<p>Abanar e latir</p>";
     } else {
        echo "<p>Rosnar</p>";
     }
    }

    public function reagirIdadePeso($idade, $peso){
     if($idade < 5){
        if($peso < 10){
            echo "<p>Abanar</p>";
        } else {
           echo "<p>Latir</p>";
        }
     } else {
        if ($peso < 10){
            echo "<p>Rosnar</p>";
        } else {
            echo "<p>Ignorar</p>";
        }
     }
    }
 }
?>