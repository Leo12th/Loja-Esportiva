<?php
$Nome = $conn->real_escape_string($_POST['txtNome']);
$Cpf = $conn->real_escape_string($_POST['txtCpf']);
$DataNascimento = $conn->real_escape_string($_POST['txtDataNascimento']);
$Email = $conn->real_escape_string($_POST['txtEmail']);
$Telefone = $conn->real_escape_string($_POST['txtTelefone']);
$Cep = $conn->real_escape_string($_POST['txtCEP']);
$Numero = $conn->real_escape_string($_POST['txtNumero']);
$Complemento = $conn->real_escape_string($_POST['txtComplemento']);
$Referencia = $conn->real_escape_string($_POST['txtReferencia']);
$Senha = $conn->real_escape_string($_POST['txtSenha']);
$ConfirmacaoSenha = $conn->real_escape_string($_POST['txtConfirmacaoSenha']);
$CheckDefaut = $conn->real_escape_string($_POST['flexCheckDefault']);


$sql="INSERT INTO inside_sports.cadastro (Nome, Cpf, DataNascimento, Email, Telefone, Cep, Numero, Complemento, Referencia, Senha, ConfirmacaoSenha, CheckDefault) VALUES ('".$Nome."','".$Cpf."', '".$DataNascimento."', '".$Email."', '".$Telefone."', '".$Cep."', '".$Numero."', '".$Complemento."', '".$Referencia."', '".$Senha."', '".$ConfirmacaoSenha."', '".$CheckDefaut."')";
if(!$result = $conn->query($sql)){
die('Ocorreu um erro [' . $conn->error . ']');
}
else    
{
    echo "<a href=\"confirmaCadastro.html\">Link1</a>";
}
?>