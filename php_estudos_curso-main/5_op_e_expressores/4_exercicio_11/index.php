<?php

$conta = "5" * 12;
echo $conta . "<br>";

//Função gettype --> Exibe o tipo de dado que recebe no parâmetro.
echo gettype($conta);
echo "<br>";
echo gettype([]);
echo "<br>";
echo gettype(12.2);
echo "<br>";
echo gettype(true);
echo "<br>";
echo gettype("teste");
echo "<br>";

