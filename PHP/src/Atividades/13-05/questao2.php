<?php

$numero = 25;

try{
    if ($numero <= 0) {
        throw new Exception('O numero não pode ser menor que zero');
    } else if (!is_numeric($numero))  {
        throw new Exception("O dado não é um numerico");
    } else {
        echo "Raiz quadrada de $numero: " . sqrt($numero);
    }
} catch (Exception $e) {
    echo $e->getMessage();
}


?>