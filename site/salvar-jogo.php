<?php 
$titulo = $_POST["titulo"];
$foto = $_POST["foto"];
$video = $_POST["video"];
$categoria = $_POST["categoria"];

include "conexao.php";

$salvar_jogo = "INSERT INTO `jogo`(`id`, `titulo`, `foto`, `video`, 'categoria') VALUES ('','$titulo','$foto','$video', '$categoria')";

$um_usuario = mysqli_query($conexao, $salvar_jogo);

mysqli_close($conexao);

header("location:novo-usuario.php?msg=sucesso");

?>