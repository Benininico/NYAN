<html>

<form action="exemplo3.php" method="GET">
    <input type="text" name="senha" id="senha">
<input type=submit value="OK">
</form>

<?php

$senha = $_GET["senha"];

try{
    $qnt =strlen($senha);
if ($qnt == 0) {
    throw new Exception('Senha está vazia!');
}
else if ($qnt < 6) {
    throw new Exception('Preeencha a senha com no mininmo 6 caracteres!');
} else {
    echo $senha . '<br>' . 'Quantidade de caracteres:' . $qnt;
}
}
catch (Exception $e) {
    echo $e->getMessage();
}

?>
</html>