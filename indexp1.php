<?php

/*Coeficiente de Financiamento = i / 1 - 1 / ( 1 + i ) ^ n
i = taxa de antecipação;
n = numero de parcelas.
*/

$valor_transacao = 130;
$taxa_antecipacao = 2.99/100;
$numero_parcelas = 4;
$percentual_cartao = 5.59;
$taxa_cartao = $valor_transacao / 100 * $percentual_cartao;
$taxa_fixa = 0.69;

$cf = ($valor_transacao / $numero_parcelas) / ($taxa_antecipacao / (1 - (1 / pow((1 + $taxa_antecipacao),5))));
$custo_antecipacao = round($valor_transacao - $cf, 2);

$valor_liquido = round($valor_transacao - $taxa_cartao - $taxa_fixa - $custo_antecipacao, 2);

echo "A taxa de antecipação é de R$"."$custo_antecipacao<br>";
echo "O valor líquido da transação é de R$".$valor_liquido;


 ?>