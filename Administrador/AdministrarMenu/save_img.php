<?php

	require_once("../Database.php");

	$validator = array('success' => false, 'messages' => array());

	if(!empty($_FILES["archivo"]["name"])){
		$fileName = basename($_FILES["archivo"]["name"]);
		$targetFilePath = '../Imagenes/'.$fileName;
		$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

		$allowTypes = array('jpg', 'png', 'jpeg');
		if (in_array($fileType, $allowTypes)) {
			if(copy($_FILES["archivo"]["tmp_name"], $targetFilePath)){
				$uploadedFile = $fileName
				$precio = $_POST["precio"];
				$nombreProducto = $_POST["nombreProducto"];

				$sql = 'INSERT INTO productos (nombreProducto, precio) VALUES (:nombreProducto, :precio, :foto)';
				$stmt = $db->prepare($sql);
				$stmt->bindValue(':precio', $dni, PDO::PARAM_STR);
				$stmt->bindValue(':nombreProducto', $nombre, PDO::PARAM_STR);
				
				if ($stmt->execute()) {
					$validator['success'] = true;
					$validator['messages'] = "DATOS GUARDADOS";
				} else {
					$validator['messages'] = "ERROR AL GUARDAR DATOS";
				}

			} else {
				$validator['messages'] = 'NO SE COPIO LA IMAGEN';
			}
		} else {
			$validator['messages'] = 'SOLO SE PERMITE FORMATOS JPG, PNG Y JPEG.';
		}

	}

	header('Content-type: application/json; charset=utf-8');
	echo json_encode($validator);
	exit();