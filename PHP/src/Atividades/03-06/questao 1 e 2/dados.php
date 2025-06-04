<?php
echo "POST cadastro.php";
echo "<hr>";


print_r($_POST);
echo "<br>";
echo "<br>";

echo "Login: " . $_POST["login"];
echo "<br>";

if ($_POST["sexo"] == "M") {
    echo "Sexo: Masculino";
} else {
    echo "Sexo: Feminino";
}
echo "<br>";
echo "Interesses: ";
echo "<br>";
    if (!empty($_POST["interesses1"])) {echo $_POST["interesses1"]; echo "<br>"; } else { $interesses1 = "";};

    if (!empty($_POST["interesses2"])) {echo $_POST["interesses2"]; echo "<br>"; } else { $interesses2 = "";};

    if (!empty($_POST["interesses3"])) {echo $_POST["interesses3"]; echo "<br>"; } else { $interesses3 = "";};

echo "Estado: "  . $_POST["estado"];
echo "<br>";
echo "Obs: " . $_POST["obs"]


?>