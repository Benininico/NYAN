<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function alterarMetodo(selectElement) {
            const form = document.getElementById("formLogin");
            const metodoSelecionado = selectElement.value;

            form.method = metodoSelecionado;

            // Altera o action com base no método
            if (metodoSelecionado === "get") {
                form.action = "ex_get.php";
            } else {
                form.action = "ex_post1.php";
            }
        }
    </script>
</head>
<body>
    <img src="image.png" height="100px" width="100px">

    <h1>Faça seu login</h1>

    <!-- Seleção do método -->
    <label for="metodo">Escolha o método:</label>
    <select id="metodo" onchange="alterarMetodo(this)">
        <option value="get" selected>GET</option>
        <option value="post">POST</option>
    </select>

    <br><br>

    <form id="formLogin" action="ex_get.php" method="get">
        <label>Nome: </label> <br>
        <input type="text" name="nome" required> <br><br>

        <label>Email: </label> <br>
        <input type="text" name="email" required> <br><br>

        <input type="reset" value="Limpar">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
