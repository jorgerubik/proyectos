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
						<img src="imagenes/logogymboree.svg" alt="" id="logo_gymboree">
					</div>
					<div class="col-md-4 text-center">
						<?php
							echo "<img src='images/".$fotografia.".png' alt='".$alt_image."' />";
						?>
					</div>
					<div class="col-md-4">
						<img src="imagenes/logo25.svg" alt="" id="logo25">
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
						<img src="imagenes/choicelogo.svg" alt="" id="logo">
					</div>
					<div class="col-md-4">
						<?php 
							echo"<a target='_blank' href='http://www.facebook.com/sharer.php?u=".$url.$fotografia.".png'><button id='' class='form-control btn-primary'>Compartir imagen en Fecebook</button></a>";
						?>	
						<br>
						<form class="form text-center" method="POST" action="agradecimientos.php">
							<div class="form-group">
								<button class="btn btn-success btn-block" type="submit">Siguiente</button>
							</div>	
						</form>
	    			</div>
					<div class="col-md-4">
						<img src="imagenes/payaso.svg" alt="" id="payaso">
		    	
					</div>
				</div>
	    </nav>
 
    	<!-- Librería jQuery requerida por los plugins de JavaScript -->
    	<script src="js/jquery.js"></script>
    	<!-- Todos los plugins JavaScript de Bootstrap (también puedes incluir archivos JavaScript individuales de los únicos plugins que utilices) -->
    	<script src="js/bootstrap.min.js"></script>
	</body>
</html>