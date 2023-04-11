<?php
ini_set('default_charset','utf-8');
$n = 0;
$result = "";
$checkNumber = "positivo";

if (isset($_POST['checkNumber'])) {
    $n = (int) $_POST['n'];
    $checkNumber = $_POST['checkNumber'];


    if($n > 0){
        $result =  "Positivo";
    }
    elseif($n < 0){
       $result =  "Negativo";
    }
    else{
        $result = "Zero";
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
        <input type="number" name="n" value=<?= $n ?> required> <br>
        <input type="submit" value="verificar" name="checkNumber">
        <br><br>

        <p>O maior valor é: <?= $result ?> </p>
    </form>

</body>

</html>