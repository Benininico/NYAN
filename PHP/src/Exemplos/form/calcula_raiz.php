<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>CALCULAR RAIZ QUADRADA</h1>
    <form action="#" method="POST">
        <label for="nome">Numero:</label><br>
        <input type="number" id="numero" name="numero" required><br><br>

    </form>
</body>
</html>

<?php

if (count($_POST) > 0) {

if (!empty($_POST['numero'])) {
    $numero = $_POST['numero'];
    $raiz = sqrt($numero);
    echo "A raiz quadrada do " . $numero . " é " . $raiz;
} else {
    echo "Numero não foi preenchido";
}

}



?>