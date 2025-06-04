<?php
echo "Mensagem form";
echo "<hr>";

print_r($_POST);

echo "<br>";
echo "<br>";


if (!empty($_POST['nome'])) {
    echo "Nome: " . $_POST["nome"];
} else {
    echo "O campo esta vazio: Nome";
}

echo "<br>";

if (!empty($_POST['idade'])) {
echo "Idade: "  . $_POST["idade"];
} else {
    echo "O campo esta vazio: Idade";
}

echo "<br>";

if (!empty($_POST['sexo'])) {
if ($_POST["sexo"] == "M") {
    echo "Sexo: Masculino";
} else {
    echo "Sexo: Feminino";
}
} else {
    echo "O campo esta vazio: Sexo";
}

echo "<br>";

if (!empty($_POST['telefone'])) {
echo "Telefone: "  . $_POST["telefone"];
} else {
    echo "O campo esta vazio: Telefone";
}

echo "<br>";

if (!empty($_POST['email'])) {
echo "Email: "  . $_POST["email"];
} else {
    echo "O campo esta vazio: Email";
}

echo "<br>";

if (!empty($_POST['mensagem'])) {
echo "Mensagem: "  . $_POST["mensagem"];
} else {
    echo "O campo esta vazio: Mensagem";
}

?>