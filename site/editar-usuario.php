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
            <h6>Editar Usuário ID: <?php echo $id;?></h6>
        </div>
        <div class="col-12">
        <form action="salvar-usuario-editado.php?id=<?php echo $id; ?>" method="post">
                Nome: <input class="form-control mb-2" name="nome" value="<?php echo $nome; ?>">
                Email: <input class="form-control mb-3" type="email" name="email" value="<?php echo $email; ?>">
                <button class="btn btn-outline-success" style="width: 50%" type="submit">Salvar</button>
            </form>
        </div>
    </div>
</div>

<?php 
include "rodape.php";
?>