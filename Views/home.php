<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title><?php echo $data['page_tag'] ?></title>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url(); ?>Assets/image/uploads/dragon.png" alt="Inicio"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url();?>productos">Items</a>
            </li>
        </ul>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
        </div>
    </div>
    </nav>

    <!--Carousel-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo base_url();?>Assets/image/uploads/dota2-fondo2.jpg" class="d-block w-100" alt="Windranger" >
          <div class="carousel-caption d-none d-md-block">
            <h5>Windranger</h5>
            <p>Lyralei, Windranger, es una heroína que tiene como característica principal las habilidades de viento.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url();?>Assets/image/uploads/dota2-fondo1.jpg" class="d-block w-100" alt="Juggernaut">
          <div class="carousel-caption d-none d-md-block">
            <h5>Juggernaut</h5>
            <p>Juggernaut. Nadie ha visto nunca el rostro que se oculta bajo la máscara de Yurnero.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url();?>Assets/image/uploads/dota2-fondo3.jpg" class="d-block w-100" alt="Invoker">
          <div class="carousel-caption d-none d-md-block">
            <h5>Invoker</h5>
            <p>Invoker. Crea magia a partir de una variedad de combinaciones de hechizos.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!--Cards-->
    <div class="container my-5">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="<?php echo base_url(); ?>Assets/image/uploads/ogre_magi.png" class="card-img-top p-3" alt="Ogre Magi">
            <div class="card-body">
              <h5 class="card-title text-success">Ogre Magi</h5>
              <p class="card-text">Con una probabilidad de multiplicar el impacto de cada hechizo que lanza, un poco de suerte es todo lo que Ogre Magi necesita para convertir a sus enemigos en cenizas.</p>
            </div>
            <div class="card-footer">
              <h6 class="text-end"><small class="text-success">Arcano</small></h6>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="<?php echo base_url(); ?>Assets/image/uploads/pudge.png" class="card-img-top p-3" alt="Pudge">
            <div class="card-body">
              <h5 class="card-title text-primary">Pudge</h5>
              <p class="card-text">Con cada gancho, su habilidad estrella, Pudge desata el miedo entre sus enemigos. Acercando a sus adversarios para trincharlos con su cuchillo de carnicero.</p>
            </div>
            <div class="card-footer">
              <h6 class="text-end"><small class="text-primary">Raro</small></h6>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="<?php echo base_url(); ?>Assets/image/uploads/abadon.png" class="card-img-top p-3" alt="Abaddon">
            <div class="card-body">
              <h5 class="card-title text-danger">Abaddon</h5>
              <p class="card-text">Capaz de transformar los ataques enemigos en una cura para él mismo, Abaddon puede sobrevivir casi cualquier enfrentamiento.</p>
            </div>
            <div class="card-footer">
              <h6 class="text-end"><small class="text-danger">Mítico</small></h6>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>
