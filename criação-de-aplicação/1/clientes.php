<?php
include 'processa_formulario.php';
//Receber os dados do formulário
$cpf = $_POST["CPF"];
$nome = $_POST["nome"];
$rua = $_POST["rua"];
$numero = $_POST["numero"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$senha = $_POST["senha"];

$sql = "INSERT into tabela_processa_formulario(cpf,nome,rua,numero,bairro,cidade,estado,email,telefone,senha)VALUES('$cpf','$nome','$rua','$numero','$bairro','$cidade','$estado','$email','$telefone','$senha')";

mysqli_query($conexao,$sql);
mysqli_close($conexao);

header('location: login.php');
?>