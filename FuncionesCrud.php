<?php
require_once("Database.php");
	//insertamos usuarios en una tabla con postgreSql
	function save($obj){
		try{
			$conn = conectardb();
			$query = "INSERT INTO usuarios (id_usuario,nombre_usuario,contrasenia,tipo_usuario) values ('".$obj->id_usuario."','".$obj->nombre_usuario."','".$obj->contrasenia."','".$obj->tipo_usuario."');";
			$save = pg_query($query) or die('Error: ' . pg_last_error());
			pg_close($conn);
			header("Location: index.php");
		}catch(PDOException $e){
			echo  $e->getMessage();
		}
	}

	function update($obj){
		try{
			$conn = conectardb();
			$query = "UPDATE usuarios SET nombre_usuario='".$obj->nombre_usuario."' WHERE id_usuario='".$obj->id_usuario."'";
			$update = pg_query($query) or die('Error: ' . pg_last_error());
			pg_close($conn);
			header("Location: index.php");
		}catch(PDOException $e){
	        	echo  $e->getMessage();
	    	}
	}

	//obtenemos usuarios de una tabla con postgreSql
	function get($id=''){
		try{
			$conn = conectardb();
			if(is_int($id)){
				$query = 'SELECT * FROM usuarios where id_usuario = '.$id;
				$listar = pg_query($query) or die('Error: ' . pg_last_error());
				$row = pg_fetch_assoc($listar);
				pg_close($conn);
    				return json_encode($row);
			}else{
				$query = 'SELECT * FROM usuarios';
				$listar = pg_query($query) or die('Error: ' . pg_last_error());
				$resutado = array();
				while ($row = pg_fetch_assoc($listar)) {
					$resutado[] = $row;
				}
				pg_close($conn);
    				return json_encode($resutado);
            		}
		}catch(PDOException $e){
	        	echo  $e->getMessage();
	    	}
	}

	function delete($id){
		try{
			$conn = conectardb();
			$query = "DELETE FROM usuarios WHERE id_usuario = '".$id."'";
			$delete = pg_query($query) or die('Error: ' . pg_last_error());
			pg_close($conn);
			header("Location: index.php");
		}catch(PDOException $e){
			echo  $e->getMessage();
		}
	}

	/*
	function baseurl(){
		return stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://' . $_SERVER['HTTP_HOST'];
	}
	*/
	
	function checkUser($user){
		if( ! $user ){
			header("Location: index.php");
		}
	}