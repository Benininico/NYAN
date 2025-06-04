<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Aluno</title>
</head>
<body>
<h1>Dados do aluno</h1>
        <form action="Pagina2.php" method="POST">
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Menção 1º BI:</label><br>
        <input type="number" name="m1" required><br><br>

        <label>Menção 2º BI:</label><br>
        <input type="number" name="m2" required><br><br>
        
        <label>Menção 3º BI:</label><br>
        <input type="number" name="m3" required><br><br>
        
        <label>Menção 4º BI:</label><br>
        <input type="number" name="m4" required><br><br>

        <label>Numero de Faltas:</label><br>
        <input type="number" name="faltas" required><br><br>

        <input type="reset" value="Limpar">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>