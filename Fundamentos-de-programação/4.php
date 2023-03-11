<!DOCTYPE html>
<html>
<head>
    <title>Verificação de idade</title>
</head>
<body>
    <h1>Verificação de idade</h1>
    <form method="post">
        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="idade"><br>
        <input type="submit" value="Verificar">
    </form>
    <?php
    if (isset($_POST["idade"])) {
        $idade = $_POST["idade"];

        if ($idade >= 18) {
            echo "<p>Olá " . ", Você é velho Geovani</p>";
        } else {
            echo "<p>Olá " . ", Você é velho Geovani</p>";
        }
    }
    ?>
</body>
</html>