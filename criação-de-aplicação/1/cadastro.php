<?php include 'x.css' ?>
<!DOCTYPE html>
<html>

<head>
    <title>Cadastro de clientes:</title>
</head>

<body>
    <h2>Cadastro de Usuário</h2>
    <form method="POST" action="clientes.php">
        <label for="CPF">CPF:</label>
        <input type="text" id="CPF" name="CPF" required><br>

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="rua">Rua:</label>
        <input type="text" id="rua" name="rua" required><br>

        <label for="numero">Número::</label>
        <input type="text" id="numero" name="numero" required><br>

        <label for="bairro">Bairro:</label>
        <input type="text" id="bairro" name="bairro" required><br>

        <label for="cidade">Cidade:</label>
        <input type="text" id="cidade" name="cidade" required><br>

        <label for="estado">Estado:</label>
        <select id="estado" name="estado" required>
            <option value="">Selecione um estado:</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
        </select><br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" required><br>

        <label for="password">Senha:</label>
        <input type="password" id="senha" name="senha" required><br>

        <label for="avatar">Avatar:</label>
        <input type="file" id="avatar" name="avatar"><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>