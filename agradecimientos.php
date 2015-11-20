<?php
	session_start();

	require('php/const.php');
	require('php/conexion.php');

	$mysqli = conectar_db();
    selecciona_db($mysqli);
    $url = "http://".$_SERVER['HTTP_HOST']."/gymboree/form/images/";

    $id = $_SESSION['id_registro'];

    $Consulta = "SELECT fotografia FROM registro_participacion WHERE id = $id";
	$pConsulta = consulta_tb($mysqli, $Consulta);

	$datos = mysqli_fetch_array($pConsulta);

	if($datos[0] == NULL){
		$fotografia="";
		$alt_image="No se encontro fotografía.";
	}else{
		$fotografia=$datos[0];
		$alt_image="Image";
	}
	cerrar_db($mysqli);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
    	<title>Gymboree</title>
    	<meta charset="UTF-8">
    	<!-- Versión compilada y comprimida del CSS de Bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/custom.css" />
		
	</head>

	<body>
		<div class="centrado-vertical">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<img src="imagenes/logo25.svg" alt="" id="logo25-2">
					</div>
					<div class="col-md-4 text-center">
						<div class="logo-sup">
						<img src="imagenes/logogymboree.svg" alt="" id="logo_gymboree-2">
						</div>
						
						<div class="texto-inf">
						<p class="lead">¡Muchas Gracias! <br>
							Hemos recibido tus datos y tus fotos ya estan participando para ganar un viaje a San Francisco para toda tu familia o 24 posibles premios.
						</p>
						<p class="lead">
							Además te has hecho acredor a 1,000 puntos para redimir en Choice Privileges, el programa de lealtad de Choice Hoteles
						</p>
						</div>
					</div>
					<div class="col-md-4">
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 text-center">
						<div id="share-buttons" style="text-align: center;">
						</div>
					</div>
				</div>
			</div>
		</div>

	    <nav class="navbar navbar-default navbar-fixed-bottom">
	    	<div class="row">
					<div class="col-md-4">
					</div>
					<div class="col-md-4">
						<img src="imagenes/choicelogo.svg" alt="" id="logo-2">
						
	    			</div>
					<div class="col-md-4">
						
		    	
					</div>
				</div>
	    </nav>
 
    	<!-- Librería jQuery requerida por los plugins de JavaScript -->
    	<script src="js/jquery.js"></script>
    	<!-- Todos los plugins JavaScript de Bootstrap (también puedes incluir archivos JavaScript individuales de los únicos plugins que utilices) -->
    	<script src="js/bootstrap.min.js"></script>
	</body>
</html>