<?php 
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$servidor_bd = "127.0.0.1";
$usuario_bd = "root";
$senha_bd = "";
$banco_de_dados = "delivery_jogos_novo";

$conexao = mysqli_connect($servidor_bd, $usuario_bd, $senha_bd, $banco_de_dados);

$salvar_usuario = "INSERT INTO `usuario`(`id`, `nome`, `senha`, `email`) VALUES ('','$nome','$senha','$email')";

$um_usuario = mysqli_query($conexao, $salvar_usuario);

if($um_usuario > 0){
    header("location:novo-usuario.php?msg=sucesso");
    
}else{
    header("location:novo-usuario.php?msg=erro");
}

mysqli_close($conexao);

?>