<!DOCTYPE html>

<html lang="en">

    <head> 
        <title>EasyBill </title> 
    </head>
    
    <body> 
        <h1 align="center" >Mi Primera pagina web </h1> 
        <hr> <p>pagina de los 3d wdf</p> 
        <?php
      	require_once "FuncionesCrudReparto.php";
				$users = get();
				$nomb =$_GET['nomb'];
        ?>        
				<thead>
					<tr>
						<th><h1>ID USUARIO</h1></th>
						<th><h1>NOMBRE USUARIO</h1></th>
						<th><h1>TIPO USUARIO</h1></th>
					</tr>
				</thead>			
				<tbody>  
    </body> 
</html>
