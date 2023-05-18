<?php
include "cabecalho.php";
include "menu-sistema.php";
?>

<div class="container-fluid banner">

  <div id="carouselExample" class="carousel slide carousel-fade">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/skyrim.png" class="d-block w-100" alt="...">
      </div>

      <div class="carousel-item">
        <img src="img/residentevill.png" class="d-block w-100" alt="...">
      </div>

      <div class="carousel-item">
        <img src="img/starwars.png" class="d-block w-100" alt="...">
      </div>

      <div class="carousel-item">
        <img src="img/Hogwarts-Legacy.png" class="d-block w-100" alt="...">
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

</div>

<div class="container">

  <div class="row">

    <div class="col-12 text-center mt-4">
      <h1>Jogos em Destaque</h1>
    </div>

    <div class="col-12 text-center">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus eum tempora aspernatur numquam. Ipsum doloribus, alias deleniti iste magnam cum explicabo itaque ducimus sequi laboriosam neque dolorem odio. Itaque, enim.
    </div>

  </div>

  <div class="row">

    <?php
    include "conexao.php";
    
    $sqlbuscar = "select * from jogo";

    $todos_os_jogos = mysqli_query($conexao, $sqlbuscar);

    while ($um_jogo = mysqli_fetch_array($todos_os_jogos)) :
    ?>
      <div class="col-md-3 text-center mt-4">
        <img src="<?php echo $um_jogo["foto"]; ?>" alt="Skyrim" class="img-fluid mb-3 style=" object-fit: cover; height=150px; width=100%; object-position: top center;">
        <h3><?php echo $um_jogo["titulo"]; ?></h3>
        <!-- <?php 
        $cor = "";
        if( strtoupper($um_jogo["categoria"]) == "Aventura"){
          $cor = "red";
        }else if( strtoupper($um_jogo["categoria"]) == "Ação");{
          $cor = "green";
        }
        ?> -->
        <h6 class="mt-3 mb-3 <?php echo $um_jogo["categoria"];?>"><?php echo $um_jogo["categoria"]; ?></h6>
        <a href="<?php echo $um_jogo["video"]; ?>" class="btn btn-outline-primary mt-3">Ver Mais</a>
      </div>
    <?php
    endwhile;
    mysqli_close($conexao);
    ?>
  </div>

  <div class="row text-center mt-5">
    <div class="col-12">
      <h2>Entre em Contato</h2>
    </div>

    <div class="col-12">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet deleniti nihil ab nesciunt voluptates, temporibus veniam perferendis ipsam? Debitis impedit eos quaerat totam quibusdam magnam ipsam quo voluptatem, placeat aliquid?</p>
    </div>
  </div>

  <div class="row">
    <form action="inserir-contato.php" method="post">
      <div class="col">
        <div class="mb-2">
          <input type="text" class="form-control" name="nome" placeholder="Nome">
        </div>

        <div class="mb-2">
          <input type="tel" class="form-control" name="telefone" placeholder="Telefone">
        </div>

        <div class="mb-2">
          <textarea class="form-control" name="duvidas" placeholder="Dúvidas" rows="4"></textarea>
        </div>

        <div class="mb-2 text-center">
          <button type="submit" class="btn btn-success w-25 mt-3">Enviar</button>
        </div>
      </div>
    </form>
  </div>
</div>

<?php 
include "rodape.php";
?>