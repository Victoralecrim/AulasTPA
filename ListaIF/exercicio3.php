<?php
$sexo = $_POST['sexo'];

if ($sexo == 'F' || $sexo == 'f') {
    echo 'Feminino';
} elseif ($sexo == 'M' || $sexo == 'm') {
    echo 'Masculino';
} else {
    echo 'Sexo Inválido';
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercicio 3</title>
</head>

<body>

    <form method="post">
        Primeiro numero <br>
        <input type="text" value=<?= $sexo ?> required> <br>
        <input type="submit" value="verificar" name="sexo">
        <br><br>

        <p>O maior valor é: <?= $result ?> </p>
    </form>

</body>

</html>