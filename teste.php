<DOCTYPE html>
<html>
<head>
<title>Calcutator</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
  
    <form id="CalculoP2" onsubmit = "return calcula()" >
   Valor da transação: <input name="valor" type="int"><br>
   Quantidade de parcelas: <input name="parc" type="int"><br>
   <input type="submit" value="calcular" />
   <p class="calcula"></p>
   <script type="text/javascript">





<body>
  </script>

<?php

// Zera a variável para evitar lixo de memória
$soma = 0;

$n1 = $_GET['valor'];
$parcial = 5.49 * 100 / $n1;
$total = $_POST['valor'];
$taxa_fixa = 0.69;
$taxa_antecipacao = 2.99/100;
$taxa_cartao = 5.50 * 100 / $n1;
$numero_parcelas = $_GET['parc'];

$cf = ($n1 / $numero_parcelas) / ($parcial/ (1 - (1 / pow((1 + $taxa_cartao + $taxa_antecipacao),5))));
$custo_antecipacao = round($n1 - $cf, 2);
$valor_cliente_paga = round($n1 + $taxa_cartao +  $taxa_fixa + $parcial, 2);
$valor_liquido_a_receber = round($n1 - $taxa_cartao - $taxa_fixa - $parcial, 2);



echo "Custo Fixo da transação é R$".number_format($cf, 2, '.', ',')."<br>";
echo "A taxa de antecipação é de R$".number_format($custo_antecipacao, 2, '.', ',')."<br>";
echo "O cliente pagará R$".number_format($valor_cliente_paga, 2, '.', ',')."<br>";
echo "O valor líquido à receber é R$".number_format($valor_liquido_a_receber, 2, '.', ',')."<br>";

