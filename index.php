<?php

require_once "ProdutoDAO.php";

// Cria um objeto da classe ProdutoDAO
$produto = new ProdutoDAO();

$informacoesProdutos = $produto->listar();

// echo "<pre>";
// var_dump($informacoesProdutos);
// echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Produtos Cadastrados</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Quantidade</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($informacoesProdutos as $produto){
            ?>
            <tr>
                <td><?=$produto['id']?></td>
                <td><?=$produto['nome']?></td>
                <td><?=$produto['preco']?></td>
                <td><?=$produto['quantidade']?></td> 
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <br>
    <a href="cadastrar.php">Cadastrar novo Produto</a>
</body>
</html>