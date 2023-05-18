<?php 

$id = $_GET["id"];
$nome = $_POST["nome"];
$email = $_POST["email"];

include "conexao.php";

$sql_editar_jogo = "update usuario set nome='$nome' ,email='$email' where id = $id";

$um_jogo = mysqli_query($conexao, $sql_editar_jogo);

mysqli_close($conexao);

header("location:listar-usuario.php?msg=sucesso")
?>