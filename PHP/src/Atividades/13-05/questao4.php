<?php
$salario = 2000.00;
$ano = 2;

function acressimoSalario($salario, $ano) {
    if ($ano >= 10) {
        return $salario * 0.1;
    } else {
        return $salario * 0.05;
    }
}

try {
        if ($salario < 1284.00) {
    throw new Exception('Salario abaixo do minimo!');
    }
    if ($ano < 5) {
    throw new Exception('Tempo de admissao abaixo de 5 anos!');
    }

acressimoSalario($salario, $ano);

$novoSalario = $salario + acressimoSalario($salario, $ano);

echo "Antigo salario: $salario";
echo "<br>";
echo "Novo Salario: $novoSalario"; 
}
catch (Exception $e) {
    echo $e->getMessage();
}


?>
