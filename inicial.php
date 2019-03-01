<?php
    include('bootstrap.php');
?>
<html>
    
    <head>
        
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>navbar</title>
    </head>
    <body background="img/ce.gif">
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Seline Diamonds  </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="inicial.php">Pagina Principal <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">Lançamentos</a>
              </li><li class="nav-item active">
                <a class="nav-link" href="cosmeticos.php">Cosméticos</a>
              </li>
              <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Perfumes
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="masculino.php">Masculinos</a>
                  <a class="dropdown-item" href="#">Femininos</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Talvez</a>
                </div>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
          </div>
        </nav>
        
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/seline.jpg.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/bo.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
        
        <div class="carousel-item">
        <img src="img/cristal.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
        
      <div class="carousel-item">
        <img src="img/paco.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
    </body>
</html>

<?php
include 'footer.php';
?>