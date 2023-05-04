<?php 
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

include "conexao.php";

$salvar_usuario = "INSERT INTO `usuario`(`id`, `nome`, `senha`, `email`) VALUES ('','$nome','" . md5($senha) . "','$email')";

$um_usuario = mysqli_query($conexao, $salvar_usuario);

mysqli_close($conexao);

header("location:novo-usuario.php?msg=sucesso");

?>