<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <?php
		  $tipoUsuario = $_GET['tipoUsuario']
	  ?>
    <title>Empleado <?php echo $tipoUsuario ?> </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="styles.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </head>
  <body>
    
<header>
<?php
		$usuario = $_GET['nombre']
	?>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Home</a>
        <button class="navbar-toggler "  type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="ml-auto">
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <div class="nav-bar">
              <form class="d-flex" role="search">
                <div class="NombreUser">
                  <thead>
                      <th>
                        <td >Empleado &nbsp &nbsp <br>&nbsp &nbsp <?php echo $usuario ?> </td> 
                      </th>
                  </thead>
                </div>
                  <a class="btn btn-custom " href="../index.php">Cerrar sesión</a>
                  <a type="button" class="nav-bar-icons">
                            <a class="btn btn-dark" href="#" role="button">
                            <svg xmlns="http://www.w3.org/2000/svg" color="white" width="25" height="25" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                            </svg>
                            </a>
                  </a>
              </form>
              </div>
            </div>
        </div>
    </div>
  </nav>
</header>

<main>

    <div id="myCarousel" class="carousel slide1" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../../Imagenes/first.png" class="d-block w-100" alt="Bienvenida" class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
        </div>
        <div class="carousel-item">
          <img src="../../Imagenes/second.png" class="d-block w-100" alt="Bienvenida" class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
        </div>
        <div class="carousel-item">
          <img src="../../Imagenes/tres.png" class="d-block w-100" alt="Bienvenida" class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  
  <div id="Carousel2" class="carousel slide2 " data-bs-ride="carousel" >
    <div class="carousel-indicators ">
      <button type="button" data-bs-target="#Carousel2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#Carousel2" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#Carousel2" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../../Imagenes/1.png" class="d-block w-100 text-center" alt="Bienvenida" class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
      </div>
      <div class="carousel-item">
        <img src="../../Imagenes/2.png"  class="d-block w-100 text-center" alt="Bienvenida" class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#Carousel2" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#Carousel2" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>





  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Funciones para administrador -->
    <div class="row">
      <div class="col-lg-4">
        <a data-toggle="modal" data-target="#exampleModalCenter">
          <img src="../../Imagenes/RegistrarPedido.png"  href= class="bd-placeholder-img rounded-circle" width="160" height="160" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
        </a> 
       <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4">
        <a href="https://example.com/">
          <img src="../Imagenes/historial.png" href= class="bd-placeholder-img rounded-circle" width="180" height="160" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
        </a> 
        <h3 class="fw-normal">Historial de pedidos</h3>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <a href="https://example.com/">
          <img src="../../Imagenes/arqueo.png" href= class="bd-placeholder-img rounded-circle" width="160" height="160" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
        </a> 
        <h3 class="fw-normal">Finalizar jornada</h3>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
