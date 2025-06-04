<?php
// Executa apenas se o array post tiver ao menos 1 valor
if (count($_POST) > 0) {
$nome = $_POST['nome'];
$email = $_POST['email'];
$pass = $_POST['pass'];

echo "Informações:";
echo "<br>";
echo $nome;
echo "<br>";
echo $email;
echo "<br>";
echo $pass;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loginin</title>
</head>
<body>


    <form id="formLogin" action="#" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" required><br><br>

        <label for="email">Senha:</label><br>
        <input type="text" id="pass" name="pass" required><br><br>

        <input type="reset" value="Limpar">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>