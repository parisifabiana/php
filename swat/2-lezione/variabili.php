<?php
    $nome = "Paperina";
    $eta = 30.5;

    echo $nome;
    echo $eta;

    var_dump($nome, $eta);

    //operatori aritmetici
    $numero1 = 10;
    $numero2= "20";

    $somma= $numero1 + $numero2;
    echo "La somma è $somma <br>";

    $differenza = $numero1 - $numero2;
    echo "la differenza è $differenza <br>";

    $prodotto = $numero1 * $numero2;
    echo "Il prodotto è $prodotto <br>";

    $divisione = $numero1 /$numero2;
    echo "Il risultato della divisione è $divisione <br>";

    $resto = $numero1 % 2;
    echo "Il resto è $resto <br>";

    $potenza = $numero1 ** 2;
    echo "La potenza è $potenza <br>";

    //data del giorno
    echo "Oggi è il " . date("d/m/y") . " e sono le ore " . date("h:i:s");

    //operatori combinati

    $a = 5;

    $a += 10;
?>