<?php
// Crie um formulário que receba o valor do capital, a taxa de juro e o número de parcelas
// Apresente o valor da parcela utilizando juro SIMPLES no mesmo arquivo php (exercícios.php)
// M = C * (1 + i) * n
function calcularMontante($c, $i, $n){
    return $c * pow((1+($i/100)),$n);
}

if(isset($_GET['txtCapital'])
 && isset($_GET['txtTaxa']) 
 && isset($_GET['txtPrazo'] )){
  $capital = $_GET['txtCapital'];
  $taxa = $_GET['txtTaxa'];
  $prazo = $_GET['txtPrazo'];
  $montante = calcularMontante(
    $capital,$taxa,$prazo
  );
  $parcela = $montante/$prazo;
  $parcela = number_format($parcela,2,',','.');  
  $montante = number_format($montante,2,',','.');  
  $taxa = number_format($taxa,2,',','.'); 
  $capital = number_format($capital,2,',','.');    
}else{
    $mensagem = "Todos os campos devem ser preenchidos!";
}





?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>

<body>
    <div class="container">
        <h2>Cálculo de parcelamento</h2>
        <h3>Com juro simples</h3>
        <form action="exercicio1.php" method="get">
            <label for="txtCapital">Capital: R$
                <input type="text" name="txtCapital" id="txtCapital" required>
            </label>
            <br/>
            <label for="txtTaxa">Taxa: 
                <input type="text" name="txtTaxa" id="txtTaxa">
                %
            </label>
            <br/>
            <label for="txtPrazo">Prazo: 
                <input type="text" name="txtPrazo" id="txtPrazo">
                mes(es)
            </label>
            <br>
            <button type="submit" name="btnCalcular">Calcular</button>

        </form>
        <div class="resultado">
            <h3>Resultado do Cálculo de parcelamento:</h3>
            <?php 
                if(isset($mensagem)){
                    echo $mensagem;
                }
                if(isset($montante)){
                    echo '<p> O Capital de R$ '.$capital.' <br> em '.$prazo.' meses, terá parcelas no valor de R$ '.$parcela.', <br>
                     totalizando R$ '.$montante.' com juros de '.$taxa.' % ao mês</p>';
                }
            ?>
        </div>
    </div>

</body>
<script>

</script>

</html>