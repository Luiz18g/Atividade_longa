<!DOCTYPE html>
<html>
<head>
    <title>Verificação de idade</title>
</head>
<body>
    <h1>Verificação de idade</h1>
    <form method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome"><br>
        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="idade"><br>
        <input type="submit" value="Verificar">
    </form>
    <?php
    if (isset($_POST["nome"]) && isset($_POST["idade"])) {
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];

        if ($idade >= 18) {
            echo "<p>Olá " . $nome . ", você é maior de idade!</p>";
        } else {
            echo "<p>Olá " . $nome . ", você é menor de idade!</p>";
        }
    }
    ?>
</body>
</html>