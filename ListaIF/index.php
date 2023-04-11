<?php
ini_set('default_charset','utf-8');
$n1 = 0;
$n2 = 0;
$result = "";
$checkNumber = "maiorN";

if (isset($_POST['checkNumber'])) {
    $n1 = (int) $_POST['n1'];
    $n2 = (int) $_POST['n2'];
    $calc = $_POST['checkNumber'];


    if($n1 > $n2){
        $result =  "O primeiro numero é maior";
    }
    elseif($n2 > $n1){
       $result =  "O segundo numero é maior que o primeiro";
    }
    else{
        $result = "Nenhum dos numeros é validos";
    }
}

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Calculadora - PHP</title>
</head>

<body>

    <form method="post">
        Primeiro numero <br>
        <input type="number" name="n1" value=<?= $n1 ?> required> <br>
        Segundo numero <br>
        <input type="number" name="n2" value=<?= $n2 ?> required> <br>
        <input type="submit" value="verificar" name="checkNumber">
        <br><br>

        <p>O maior valor é: <?= $result ?> </p>
    </form>

</body>

</html>