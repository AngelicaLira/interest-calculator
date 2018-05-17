<<!DOCTYPE html>
<html>
<head>
<title>Calcutator</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
   
<form action=”” method=”post”>
 <input type=”text” name=”num1″ id=”num1″ /> 
 <input type=”text” name=”num2″ id=”num2″ /><br />
 <input type=”submit” value=”Calcular” method= "pst" />
</form>

<?php


/*Apenas executa o comando php se existir os dois valores a serem somados*/
if(($_POST[‘num1’] != “”) and ($_POST[‘num2’] != “”)){

    /*A palavra num1 é referente ao name do input do form no html, está pegando o valor de num1 e atribuindo a variável $num1 */
    $num1 = $_POST[‘num1’];
     
    /*A palavra num2 é referente ao name do input do form no html, está pegando o valor de num2 e atribuindo a variável $num2 */
    $num2 = $_POST[‘num2’];
    
    $resultado = $_GET ["num1" + "num2"];
    
    /*Exibe o resultado na tela*/
    echo "O resultado é".$resultado; 
    }
?>
   
</body>
</html>