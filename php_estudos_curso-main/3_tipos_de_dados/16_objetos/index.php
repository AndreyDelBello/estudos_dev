<?php

 class Pessoa {

    function falar() {
        echo "Olá pessoal!";
    }
 }

 $andrey = new Pessoa();

 $andrey->nome = "Andrey";

 echo $andrey->nome;
echo "<br>";

$andrey->falar();