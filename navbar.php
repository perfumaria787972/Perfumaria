<?php
    include('bootstrap.php');
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>navbar</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="inicial.php">Seline Diamonds  </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="lacamentos.php">Lançamentos</a>
              </li><li class="nav-item active">
                <a class="nav-link" href="cosmeticos.php">Cosméticos</a>
              </li>
              <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Perfumes
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="masculino.php">Masculinos</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="feminino.php">Femininos</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Talvez</a>
                </div>
              </li>
              </li><li class="nav-item active">
                <a class="nav-link" href="form_login.php">Login</a>
              </li>
            </ul>
              <form class="form-inline my-2 my-lg-0" method="post" action="consultar_produto.php">
                  <input class="form-control mr-sm-2" type="search" placeholder="Buscar" name="buscar" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="consultar">Buscar</button>
            </form>
          </div>
        </nav>
    </body>
</html>