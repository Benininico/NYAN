<html>
<form action="exemplo4.php" method="GET">
    <input type="number" name="idade" id="idade">
<input type=submit value="OK">
</form>
</html>
<?php
$idade = $_GET["idade"];

try {
    $tempoRestante = calcularTempoAposentadoria($idade);
    echo "Idade: $idade anos";
    echo "Falta: $tempoRestante anos restantes para se aposentar";
}
catch (Exception $e) {
    echo $e->getMessage();
}

function calcularTempoAposentadoria($idade) {
    if ($idade < 18) {
        throw new Exception('Ainda está muito longe para se aposentar');
    }
    else if ($idade > 70) {
        throw new Exception('Já devevia estar aposentado');
    } else {
        return 70 - $idade;
    }
}



?>