<?php
function conectardb(){
	$conn_string = "host=ec2-52-72-56-59.compute-1.amazonaws.com port=5432 dbname=d9nsqgk9d088p8 user=jjoifiarzxgbxb password=8c9270753343850572afa47edace392672c2bf12acf7a8bf27ff64b5e1a6f303 options='--client_encoding=UTF8'";

	// establecemos una conexion con el servidor postgresSQL
	$dbconn = pg_connect($conn_string);

	// Revisamos el estado de la conexion en caso de errores.
	if(!$dbconn) {
		echo "Error: No se ha podido conectar a la base de datos\n";
	}else{
		return $dbconn;
	}
}
