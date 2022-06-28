<?php
require_once('funcoes.php');
?> 

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

<div class="container">
    <?php
         
        // comandos alternativos para linkar um arquivo: include 'funcoes.php , require()
        // $idade = 16;
        // echo "<h1>Fala Zé idade $idade</h1>";
        // echo somar(). "<br/>";
        // somarIdade(25,28,13,14);
        // echo calcularComissao(1500,7.65);
        $montante = calcularMontante(1000,0.98,12);
        $parcela = number_format(($montante/12),2',','.');
        echo "12 parcelas de R$".$parcela."<br/>";
        echo 'Valor total R$' .number_format(($montante),2',','.');
    ?>
</div>
</body>
</html>



