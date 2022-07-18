<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Administrador</title>

    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <link href="../styles.css" rel="stylesheet">
  </head>
      
  <header>
        <?php
            $usuario = $_GET['nombre'];
            $tipo = $_GET['tipoUsuario'];
          ?>
          <nav class="navbar navbar-expand-md fixed-top bg-dark">
            <div class="container-fluid">
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
                                <td ><?php echo $tipo ?> &nbsp &nbsp <br>&nbsp &nbsp <?php echo $usuario ?> </td> 
                              </th>
                          </thead>
                        </div>
                          <a class="btn btn-custom" href="../index.php?nombre=<?php echo $usuario?>&tipoUsuario=<?php echo $tipo?>">Volver</a>
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
      <h1> &nbsp </h1>
      <div class="col-md-8">

      <div class="table-responsive table-sm ">
        <table class="table table-hover">
            <thead class="table-primary">
                <tr>
                    <th  scope="col">#</th>
                    <th  scope="col">Marca</th>
                    <th  scope="col">Modelo</th>
                    <th  scope="col" class="text-center">Año</th>
                    <th  scope="col" class="text-right">Precio</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">1</td>
                    <td>Nissan</td>
                    <td>Qasqai</td>
                    <td class="text-center">2017</td>
                    <td class="text-right">18.560€</td>
                </tr>
                <tr>
                    <td scope="row">2</td>
                    <td>Seat</td>
                    <td>Ibiza</td>
                    <td class="text-center">2005</td>
                    <td class="text-right">4.500€</td>
                </tr>
                <tr>
                    <td scope="row">3</td>
                    <td>Citroen</td>
                    <td>Saxo</td>
                    <td class="text-center">2001</td>
                    <td class="text-right">1.850€</td>
                </tr>
            </tbody>
            <tfoot>
                <tr class="col-md-4">
                    <td colspan="4"><strong>Total</strong></td>
                    <td class="text-right"><strong>24.910€</strong></td>
                </tr>
            </tfoot>
        </table>
    </div>
    </div>


      <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>
    </body>
  </main>
</html>
