<?php
if($_POST){
if(is_array(isset($_POST['cad']))){
    foreach($_POST['cad'] as $dados){
        echo "$dados";
    }
}
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
        <form action="#" method="post">
        <h1>Nota Bimestral do Aluno</h1>
        Nome do Aluno:<input type="text" name="cad[]"><br>
        Nota do Aluno:<input type="text" name="cad[]"><br>
        <input type="submit" value="Enviar"><br>
        <?php
        $dados = $_POST['cad'];
        var_export($dados);
        ?>
    </form>
</body>
</html>