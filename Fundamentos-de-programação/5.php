<!DOCTYPE html>
<html>
<head>
    <title>Tabuada</title>
</head>
<body>

    <h1>Tabuada</h1>

    <form method="post">
        <label>Digite um número:</label>
        <input type="number" name="numero">
        <input type="submit" value="Gerar tabuada">
    </form>

    <?php
    if (isset($_POST["numero"])) {
        $num = $_POST["numero"];

        echo "<h2>Tabuada do $num:</h2>";

        for ($i = 1; $i <= 10; $i++) {
            echo $num . " x " . $i . " = " . $num * $i . "<br>";
        }
    }
    ?>

</body>
</html>