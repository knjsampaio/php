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
       Capital emprestado: <input type="text" name="capital"><br>
       Taxa de Juros: <input type="text" name="taxa"><br>
       Parcelas: <input type="text" name="parcela"><br>
        <button type="submit" name="btn">Enviar</button>
        <p>
            <?php
            function calcularMontante($capital, $taxa, $parcela){
                $montante = $_GET["capital"] * $_GET["taxa"] * $_GET["periodo"];
                return $montante;
            }
            echo "O total é: " .$montante;
            ?>
        </p>
    </form>
</body>
</html>