<?php 

$id = $_GET["id"];
$titulo = $_POST["titulo"];
$foto = $_POST["foto"];
$categoria = $_POST["categoria"];
$video = $_POST["video"];

include "conexao.php";

$sql_editar_jogo = "update jogo set titulo='$titulo' ,foto='$foto' ,categoria='$categoria' ,video='$video' where id = $id";

$um_jogo = mysqli_query($conexao, $sql_editar_jogo);

mysqli_close($conexao);

header("location:listar-jogos.php?msg=sucesso")
?>