<?php
// Exercício 4: Lógica de Desconto

echo "Digite o valor da compra: ";
$valor_compra = (float) trim(fgets(STDIN));

echo "Possui cupom de desconto? (s/n): ";
$resposta = trim(fgets(STDIN));
$possui_cupom = ($resposta == 's' || $resposta == 'S');

$desconto = ($valor_compra > 150 || $possui_cupom) ? 10 : 0;
$valor_final = $valor_compra - ($valor_compra * $desconto / 100);

echo "\nValor original: R$" . number_format($valor_compra, 2, ',', '.') . "\n";
echo "Desconto aplicado: " . $desconto . "%\n";
echo "Valor final a pagar: R$" . number_format($valor_final, 2, ',', '.') . "\n";
