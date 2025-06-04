<?php
$nome = $_POST['nome'];
$m1 = $_POST['m1'];
$m2 = $_POST['m2'];
$m3 = $_POST['m3'];
$m4 = $_POST['m4'];
$faltas = $_POST['faltas'];

$media = ($m1 + $m2 + $m3 + $m4) / 4;

$presenca = 80 - $faltas;

$frequencia = $presenca / 80 * 100;

echo "<h1>Dados do Aluno</h1>";
echo "Nome do Aluno: " . $nome;
echo "<br>";
echo "Média: " . $media;
echo "<br>";
echo "Frequencia: " . $frequencia;


?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do aluno</title>
</head>
<body>
 
</body>
</html>
