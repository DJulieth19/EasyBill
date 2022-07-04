<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Administrador</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="styles.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="ml-auto">
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="nav-bar  justify-content-right">
          <form class="d-flex" role="search">
              <thead>
                  <th>
                    <td >Administrador &nbsp &nbsp <br>&nbsp &nbsp Nombre</td> 
                  </th>
              </thead>
              <a class="btn btn-custom" href="../index.php">Cerrar sesión</a>
              <button type="button" class="btn btn-lg">
                  <svg xmlns="http://www.w3.org/2000/svg" color="white" width="25" height="25" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                      <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"></path>
                  </svg>
              </button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
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


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Funciones para administrador -->
    <div class="row">
      <div class="col-lg-4">
        <a href="https://example.com/">
          <img src="../../Imagenes/usuarios.png" href= class="bd-placeholder-img rounded-circle" width="160" height="160" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
        </a> 
        <h3 class="fw-normal">Administrar Usuarios</h3>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <a href="https://example.com/">
          <img src="../../Imagenes/actividad.png" href= class="bd-placeholder-img rounded-circle" width="160" height="160" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
        </a> 
        <h3 class="fw-normal">Consulta de Actividad</h3>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <a href="https://example.com/">
          <img src="../../Imagenes/ventas.png" href= class="bd-placeholder-img rounded-circle" width="160" height="160" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
        </a> 
        <h3 class="fw-normal">Consulta de Ventas</h3>
      </div><!-- /.col-lg-4 -->
      
      <div class="col-lg-4">
        <a href="https://example.com/">
          <img src="../../Imagenes/historial.png" href= class="bd-placeholder-img rounded-circle" width="160" height="160" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
        </a> 
        <h3 class="fw-normal">Historial de Pedidos</h3>
      </div><!-- /.col-lg-4 -->
      
      <div class="col-lg-4">
        <a href="https://example.com/">
          <img src="../../Imagenes/menu.png" href= class="bd-placeholder-img rounded-circle" width="140" height="160" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
        </a>  <h3 class="fw-normal">Administrar Menú</h3>
         </div><!-- /.col-lg-4 -->
      
      <div class="col-lg-4">
        <a href="https://example.com/">
          <img src="../../Imagenes/reportes.png" href= class="bd-placeholder-img rounded-circle" width="160" height="160" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
        </a>   <h3 class="fw-normal">Reportes Administrativos</h3>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
