<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Novo Produto</title>
</head>
<body>
    <h1>Cadastrar Produto</h1>
    <form action="salvar.php" method="post">
        <label for="">Nome: </label>
        <input type="text" name="nome" required>

        <br>
        <label for="">Preço: </label>
        <input type="number" name="preco" required>

        <br>
        <label for="">Quantidade: </label>
        <input type="number" name="quantidade">

        <br>
        <button type="submit">Cadastrar</button>
    </form>
    <a href="index.php">Listar o bando de dados</a>
</body>
</html>