<!DOCTYPE HTML>
<html lang = "pt-br">
<head>
   <title>Exemplo</title>
   <meta charset = "UTF-8">
</head>
<body>
   <form action="" method="post" >
   
        Qual valor total da transação? <input name="num1" type="int"><br>

      Quantidade de Parcelas: <input name="parc" type="int"><br>
      <input type="submit" name="operacao" value="enter">    
      <//input type="submit" name="operacao" value="-">     
      <//input type="submit" name="operacao" value="*">     
      <//input type="submit" name="operacao" value="/">     


 
   </form> 
<?php
   
   $valor_da_transacao = $_POST['num1'];
   $taxa__fixa_transacao = 0.69;
   $taxa_fixa = $_POST ['tax2'];
   $taxa_da_antecipacao = 2.90/100;
   $taxa_cartao = $_GET[$valor__da_transacao] / 100 * $percentual_cartao;
   $percentual_cartao = 5.90;
   $quantidade_de_parcelas = $_POST['parc'];
   $h = $_POST ['result'];
   $op = $_POST['operação'];


    // Equação - Antecipação: taxa de antecipacao / 30 * ( ( 30 + ( quantidade de parcelas - 1 ) * 15) - prazo de repasse)  // Tabela de precificaçãoinput name="table" type="number"



    $h = ($valor__da_transacao / $quantidade_de_parcelas) / ($taxa__da_antecipacao / (1 - (1 / pow((1 + $taxa__da_antecipacao),5))));
    $hd = round($valor__da_transacao - $h, 2);
    
    $valor_liquido = round($valor__da_transacao - $taxa_cartao - $taxa_fixa - $custo_antecipacao, 2);
     //   $op = $e / $i * (($i + ($f-1)*15)-$g);
     

     echo "A taxa de antecipação é de R$"."$hd<br>";
     echo "O valor líquido da transação é de R$".$valor_liquido; 

?>       
</body>