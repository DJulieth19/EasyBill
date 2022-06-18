<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./assets/css/estilos.css">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900" rel="stylesheet" />
	<link rel="shortcut icon" href="./assets/img/icon.png" type="image/png">
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
 	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<title>Cine Colombia</title>
</head>
<body>
	<header>
		<div class="contenedor">
			 <img src="./assets/img/logo.svg" alt="">
			<nav>
				<a href="./login/login.php" class="navbar-ingresar">
            <span>Ingresar</span>
            <ion-icon name="log-in-outline"></ion-icon>
       </a>
			</nav>
		</div>
	</header>
	<main>
		<div class="space1"></div>
		<section class="banner">
  	  <div class="banner-card">
  	    <img src="./assets/img/banner.jpg" class="banner-img" alt="">
      </div>
      <div class="space3"></div>
    </section>	
    <?php
      require_once "./Cartelera/FuncionesCartelera.php";
			$users = get();
    ?>    
    <div class="contenedor">	
			<section class="peliculas">	
				<h2 class="titulos">EN CARTELERA</h2>
				<div class="spaceb1"></div>
		    <div class="peliculas-grid">
					<?php
						if( !empty( $users ) ){
					?>
					<?php
					$obj = json_decode($users, true); 
						foreach( $obj as $user ){
					?>
				  <div class="peliculas-card">
				  	<div class="card-head">
							<?php
								if( ($user['imagen']=='si' ) ){
							?>
								<button type="button" onclick="location.href='./login/login.php'"><img src="./assets/img/movies/<?php echo $user['nomb_peli']?>.jpg" alt="" 		class="card-img"></button>		  		
							<?php
								}else{
							?>	
								<button type="button" onclick="location.href='./login/login.php'"><img src="./assets/img/movies/nada.jpg" alt="" class="card-img"></button>	
							<?php
								}
							?>														 	
				    </div>
				    <div class="card-body">
				    	<h3 class="card-titulo"><?php echo $user['nomb_peli'] ?></h3>
				    	<div class="card-info">
				      	<span class="genero"><?php echo $user['genero'] ?></span>
				        <span class="year"><?php echo $user['año'] ?></span>
				      </div>
				    </div>
				  </div>						  
					<?php
						}
					?>    
					<?php
						}else{
					?>
						<div class="alert alert-danger" style="margin-top: 100px">No hay ningun usuario registrado</div>
					<?php
						}
					?>             	         
      	</div>
    	</section>
		</div>
	</main>
</body>
</html>
