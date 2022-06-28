<?php
    // Crie um formulário que recebe o valor do capital, a taxa de juros e o número de parcelas
    // Apresente o valor da parcela utilizando juros Simples no mesmo arquivo php (exercícios.php)

    // JUROS = CAPITAL EMPRESTADO * TAXA DE JUROS NO PERÍODO * TEMPO ( J = C * I * T)
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="#" method="get">
        <input type="text" name="capital">
        <input type="text" name="taxa">
        <input type="text" name="parcela">
        <button type="submit" name="btn">Enviar</button>
        <p>
            <?php
            if(isset($_GET['capital'])){
                $txtcapital = $_GET['nome'];
            }
            if(isset($_GET['taxa'])){
                $txttaxa = $_GET['nome'];
            }
            if(isset($_GET['parcela'])){
                $txtparcela = $_GET['nome'];
            }
            
            if(isset($txtcapital)){
                    echo($txtcapital);
                }
                if(isset($txttaxa)){
                    echo($txttaxa);
                }
                if(isset($txtparcela)){
                    echo($txtparcela);
                }

            ?>
        </p>
    </form>
</body>
</html>