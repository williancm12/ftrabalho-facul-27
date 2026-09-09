<?php
// Exercício 2: Calculadora de IMC

echo "Digite seu peso (kg): ";
$peso = trim(fgets(STDIN));

echo "Digite sua altura (ex: 1.75): ";
$altura = trim(fgets(STDIN));

$imc = $peso / ($altura * $altura);

echo "\nIMC: " . number_format($imc, 2) . "\n";

if ($imc < 18.5) {
    echo "Classificação: Abaixo do peso\n";
} elseif ($imc >= 18.5 && $imc <= 24.9) {
    echo "Classificação: Peso normal\n";
} elseif ($imc >= 25 && $imc <= 29.9) {
    echo "Classificação: Sobrepeso\n";
} else {
    echo "Classificação: Obesidade\n";
}
