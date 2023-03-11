<?php
include 'processa_produtos.php';
//Receber os dados do formulário
$nome = $_POST["nome"];
$categoria = $_POST["categoria"];
$quantidade = $_POST["quantidade"];
$preco1 = $_POST["preco1"];
$preco2 = $_POST["preco2"];
$sql = "INSERT into tabela_processa_produtos(nome,categoria,quantidade,preco1,preco2)VALUES('$nome','$categoria','$quantidade','$preco1','$preco2')";

mysqli_query($conexao,$sql);
mysqli_close($conexao);

header('location: login.php');
?>