<!DOCTYPE html>
<html>

<head>
    <title>Cadastro de clientes:</title>
</head>

<body>
    <h2>Cadastro de Produto</h2>
    <form method="POST" action="produto.php">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="categoria">Categoria do produto:</label>
        <input type="text" id="categoria" name="categoria" required><br>

        <label for="quantidade">Quantidade:</label>
        <input type="number" id="quantidade" name="quantidade" min="0" required><br>

        <label for="preco1">Preço da compra:</label>
        <input type="number" id="preco1" name="preco1" min="0" required><br>

        <label for="preco2">Preço da venda:</label>
        <input type="number" id="preco2" name="preco2" min="0" required><br>

        <label for="avatar">Avatar:</label>
        <input type="file" id="avatar" name="avatar"><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>