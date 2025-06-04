<?php
echo "Médoto GET";
echo "<hr>";

//exibe os dados digitados pelo usr em uma array

print_r($_GET);

echo "<br>";
echo "<br>";

echo "Nome: " . $_GET["nome"];
echo "<br>";
echo "Email: "  . $_GET["email"];


?>