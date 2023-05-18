<?php 
$id = $_GET["id"];

include "conexao.php";

$sql_excluir_usuario = "delete from usuario where id = $id";

$um_usuario = mysqli_query($conexao, $sql_excluir_usuario);

mysqli_close($conexao);

header("location:listar-usuario.php?msg=excluido");
?>