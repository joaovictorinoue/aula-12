<?php
include "cabecalho.php";
include "menu.php";
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Cadastrar Novo Usuário</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="salvar-jogo.php" method="post">
                <input name="titulo" required placeholder="Título"><br>
                <input name="foto" required placeholder="Foto"><br>
                <input name="video" required placeholder="Vídeo"><br>
                <select name="categoria" >
                    <option value="aventura">Aventura</option>
                    <option value="luta">Luta</option>
                    <option value="acao">Ação</option>
                </select>
                <button type="submit" class="btn btn-success">Salvar Jogo</button>
            </form>
        </div>
    </div>
    <?php
$mensagem = $_GET["msg"] ?? "";
if ($mensagem == "sucesso"){
?>
    <div class="alert alert-success" role="alert">
  ✅ Usuário Cadastrado com Sucesso.
</div>
<?php
}
?>
</div>