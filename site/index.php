<?php
include "cabecalho.php";
include "menu.php";
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
      </h1>
    </div>
  </div>
  <div class="row">

    <?php
    for ($i = 0; $i < 12; $i++) :
    ?>
      <div class="col-md-3 text-center mt-4">
        <img src="img/skyrim.png" alt="Skyrim" class="img-fluid mb-3">
        <h3>Skyrim</h3>
        <a href="nomedojogo.php" class="btn btn-outline-primary mt-3">Ver Mais</a>
      </div>

    <?php
    endfor;
    ?>

    <!-- <div class="col-3 text-center mt-4">
      <img src="img/residentevill.png" alt="Resident Evil" class="img-fluid mb-3">
      <h2>Resident Evil 4</h2>
      <a href="nomedojogo.php" class="btn btn-outline-primary mt-3">Ver Mais</a>
    </div>

    <div class="col-3 text-center mt-4">
      <img src="img/starwars.png" alt="Star Wars" class="img-fluid mb-3">
      <h2>Star Wars Fallen Order</h2>
      <a href="nomedojogo.php" class="btn btn-outline-primary mt-3">Ver Mais</a>
    </div>

    <div class="col-3 text-center mt-4">
      <img src="img/Hogwarts-Legacy.png" alt="Hogwarts Legacy" class="img-fluid mb-3">
      <h2>Hogwarts Legacy</h2>
      <a href="nomedojogo.php" class="btn btn-outline-primary mt-3">Ver Mais</a>
    </div> -->

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>