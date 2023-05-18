<?php 
include "cabecalho.php";
include "menu-sistema.php";

$id = $_GET["id"];
$nome = $email = "";

include "conexao.php";
$sql_buscar = "select * from usuario where id = $id";
$todos_os_usuarios = mysqli_query($conexao, $sql_buscar);
while ($um_usuario = mysqli_fetch_assoc($todos_os_usuarios)) :
    $nome = $um_usuario["nome"];
    $email = $um_usuario["email"];
endwhile;
mysqli_close($conexao);
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h6>Detalhes do Usuário ID: <?php echo $id;?></h6> 
        </div>
        <div class="col-12">
            <h3>Nome: <?php echo $nome;?></h3>
            <p>Email: <?php echo $email;?></p>
        </div>
    </div>
</div>

<?php 
include "rodape.php";
?>