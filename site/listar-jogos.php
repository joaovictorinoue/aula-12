<?php
include "cabecalho.php";
include "menu-sistema.php";
?>

<div class="container">
    <div class="row">
        <div class="col text-center mt-3 mb-3">
            <h1>Lista de Jogos</h1>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <a href="novo-jogo.php" class="btn btn-success">Novo Jogo</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table border="1" class="table table-dark table-hover">
                <tr>
                    <td>Código</td>
                    <td>Título</td>
                    <td>Categoria</td>
                    <td>Ações</td>
                </tr>
                <?php
                include "conexao.php";

                $sqlbuscar = "select * from jogo";

                $todos_os_jogos = mysqli_query($conexao, $sqlbuscar);

                while ($um_jogo = mysqli_fetch_array($todos_os_jogos)) :
                ?>
                    <tr>
                        <td><?php echo $um_jogo["id"]; ?> </td>
                        <td><?php echo $um_jogo["titulo"]; ?> </td>
                        <td><?php echo $um_jogo["categoria"]; ?> </td>
                        <td>
                            <a class="link-underline link-underline-opacity-0" href="excluir-jogos.php?id=<?php echo $um_jogo["id"]; ?>">❌</a>
                            
                            <a class="link-underline link-underline-opacity-0" href="ver-jogo.php?id=<?php echo $um_jogo["id"]; ?>"><img src="img/eye.png" alt="ver"></a>

                            <a class="link-underline link-underline-opacity-0" href="editar-jogos.php?id=<?php echo $um_jogo["id"]; ?>">🖌</a>
                        </td>
                    </tr>
                <?php
                endwhile;
                mysqli_close($conexao);
                ?>
            </table>
        </div>
    </div>
</div>

<?php
include "rodape.php";
?>