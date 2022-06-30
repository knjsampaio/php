<?php
// Equação de segundo grau: ax²+bx+c=0
if(isset($_GET['A'])
&& isset($_GET['B'])
&& isset($_GET['C'])){
$A=$_GET['A'];
$B=$_GET['B'];
$C=$_GET['C'];
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Insira os valores abaixo</h1>
    <form action="exercicio2.php" method="get">
    <label for="txtA">Valor A:
    <input type="text" name="A" id="A">
    </label><br>
    <label for="txtB">Valor B:
    <input type="text" name="B" id="B">
    </label><br>
    <label for="txtC">Valor C:
    <input type="text" name="C" id="C">
    </label><br>
    <button type="submit">Calcular</button>
    </form>
    <?php

    $delta = ($b*$b)-((4*$a)*$c);
        return $delta;
    $x1 = (-$b + sqrt ($delta)) / (2 * $a);
    $x2 = (-$b - sqrt ($delta)) / (2 * $a);
    echo 'X1'.$x1;
    echo 'X2'.$x2;
    ?>
</body>
</html>