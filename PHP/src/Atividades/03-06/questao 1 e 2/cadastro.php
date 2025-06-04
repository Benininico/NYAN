<!DOCTYPE html>
<html>

<head>
    <title>Formulários</title>
    <meta charset="utf-8">
</head>

<body>
    <form action="dados.php" method="post">
        <h2>Cadastre-se</h2>
        Login: <br>
        <input type="text" name="login"> <br><br>
        Sexo: <br>
        <input type="radio" name="sexo" value="M">Masculino <br>
        <!-- value: define o valor que será armazenado no campo sexo (F ou M) -->
        <input type="radio" name="sexo" value="F"> Feminimo <br><br>
        Interesses: <br>
        <input type="checkbox" name="interesses1" value="futebol"> Futebol <br>
        <input type="checkbox" name="interesses2" value="cursos"> Cursos <br>
        <input type="checkbox" name="interesses3" value="moda"> Moda <br> <br>
        Estado: <br>
        <select name="estado">
            <option value="SP">SP</option>
            <option value="RJ">RJ</option>
            <option value="MG">MG</option>
            <option value="BA">BA</option>
        </select> <br><br>
        Observações: <br>
        <textarea name="obs"></textarea><br><br>
        <input type="submit" value="Cadastar">
        <input type="reset" value="Limpar">
    </form>
</body>

</html>