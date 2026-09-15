<?php
// Exercício 25: Conversão de Fahrenheit para Celsius

echo "Digite a temperatura em Fahrenheit: ";
$fahrenheit = (float) trim(fgets(STDIN));

$celsius = 5 / 9 * ($fahrenheit - 32);

echo "Temperatura em Celsius: " . number_format($celsius, 2) . "°C\n";
