<?php
$salario = 100;
$ano = 10;

function acressimoSalario($salario, $ano) {
    if ($ano >= 10) {
        return $salario * 0.1;
    } else {
        return $salario * 0.05;
    }
}

$novoSalario = $salario + acressimoSalario($salario, $ano);

echo "Antigo salario: $salario";
echo "<br>";
echo "Novo Salario: $novoSalario"; 

?>