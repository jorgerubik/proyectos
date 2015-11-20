<!DOCTYPE html>
<html lang="es">
    <head>
    	<title>Gymboree</title>
    	<meta charset="UTF-8">
    	<!-- Versión compilada y comprimida del CSS de Bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/custom.css" />
		<link rel="stylesheet" href="css/datepicker.css">
	</head>

	<body class="fondo">	
		
			<div class="centrado-vertical">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<img src="imagenes/logogymboree.svg" alt="" id="logo_gymboree">
						</div>
						<div class="col-md-4" id="form">
							<?php
							    require('forms/form-funcard.php');
							?>
						</div>
						<div class="col md-4">
							<img src="imagenes/logo25.svg" alt="" id="logo25">
						</div>
					</div>
				</div>
			

		    <nav class="navbar navbar-default navbar-fixed-bottom">
							<img src="imagenes/choicelogo.svg" alt="" id="logo">
							<img src="imagenes/payaso.svg" alt="" id="payaso">
		    	
		    </nav>
 		</div>
    	<!-- Librería jQuery requerida por los plugins de JavaScript -->
    	<script src="js/jquery.js"></script>
    	<!-- Todos los plugins JavaScript de Bootstrap (también puedes incluir archivos JavaScript individuales de los únicos plugins que utilices) -->
    	<script src="js/bootstrap.min.js"></script>

    	<script src="js/script-index.js"></script>
    	<script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
       <script src="js/scritp-edad.js"></script>
    	
    	<script type="text/javascript">
           $(document).ready(function () {

           		$('#part_edad').datepicker({
           			format: "dd/mm/yyyy"
           		});
           });
        </script>
        
	</body>
</html>