<!DOCTYPE html>

<html lang="en">

    <head> 
        <title>EasyBill </title> 
    </head>
    
    <body> 
        <h1 align="center" >Mi Primera pagina web </h1> 
        <hr> <p>pagina de los 3d wdf</p> 
        <?php
      	require_once "FuncionesCrud.php";
				$users = get();
        ?>        
				<table class="container">			
        <div class="conb">  
        	<div class="spaceb1"></div>      	
        	<button role="boton1" class="boton1" onclick="location.href='añadirReparto.php?nomb=<?php echo $nomb ?>'">Añadir Reparto</button>
        	<div class="spaceb2"></div>
        </div>
        <?php
        	if( !empty( $users ) ){
        ?>
				<thead>
					<tr>
						<th><h1>ID USUARIO</h1></th>
						<th><h1>NOMBRE USUARIO</h1></th>
						<th><h1>TIPO USUARIO</h1></th>
					</tr>
				</thead>
				<?php
					$obj = json_decode($users, true); 
					foreach( $obj as $user ){
        ?>
				<tbody>
          <tr>
            <td><?php echo $user['id_usuario'] ?></td>
            <td><?php echo $user['nombre_usuario'] ?></td>
            <td><?php echo $user['tipo_usuario'] ?></td>
            <td> 

            	<button role="boton" class="boton" name="id_usu" onclick="location.href='EditarReparto.php?id_repar=<?php echo $user['id_repar'] ?>&nomb_repar=<?php echo $user['nomb_repar'] ?>&nomb=<?php echo $nomb ?>'">Editar</button>
          	</td> 
        	</tr>
				</tbody>
      	<?php
					}
        ?>
			</table>    
      <?php
      	}else{
      ?>
      <div class="alert alert-danger" style="margin-top: 100px">No hay ningun horario registrado</div>
      <?php
      	}
      ?>  
    </body> 
</html>
