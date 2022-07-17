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

<link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="../styles.css" rel="stylesheet">
  </head>
      
  <header>
        <?php
            $usuario = $_GET['nombre']
          ?>
          <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <h3>&nbsp &nbsp</h3>
                <h3>Consulta de Actividad</h3>
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
                                <td >Administrador &nbsp &nbsp <br>&nbsp &nbsp <?php echo $usuario ?> </td> 
                              </th>
                          </thead>
                        </div>
                          <a class="btn btn-custom " href="../index.php">Volver</a>
                          <a type="button" class="nav-bar-icons">
                                    <div class="dropdown">
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
    <body>
      <table class="table-responsive col-md-6 offset-md-3">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>


      <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>
    </body>
  </main>
</html>
