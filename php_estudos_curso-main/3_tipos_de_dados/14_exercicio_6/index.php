<?php
$carro = [
    'marca' => 'Toyota',
    'cor' => 'Branca',
    'teto_solar' => true
];

print_r($carro);
echo "<br>";
$marca = $carro['marca'];
$cor = $carro['cor'];
$teto_solar = $carro['teto_solar'];

echo $carro['marca'];
echo "<br>";
echo $carro['cor'];
echo "<br>";

echo "O carro é da marca $marca, de cor $cor.";

