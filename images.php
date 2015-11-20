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
					<div class="col-md-4">
						<?php
						    require('forms/form-images.php');
						?>
					</div>
					<div class="col-md-4">
						<img src="imagenes/logo25.svg" alt="" id="logo25">
					</div>
				</div>
				<div class="row">
					<div class="">
						<?php
						    require('forms/output-images.php');
						?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						
					</div>
					<div class="col-md-4">
						<button id="crearimagen" class="form-control btn-primary">Compartir imágen</button>
					</div>
					<div class="col-md-4">
						
					</div>
				</div>
				<div class="row">
					<div class="" id="result-image">
						
					</div>
				</div>
			</div>
		</div>

	    <nav class="navbar navbar-default navbar-fixed-bottom">
			<img src="imagenes/choicelogo.svg" alt="" id="logo">
			<img src="imagenes/payaso.svg" alt="" id="payaso">
	    </nav>
 
    	<!-- Librería jQuery requerida por los plugins de JavaScript -->
    	<script src="js/jquery.js"></script>
    	<!-- Todos los plugins JavaScript de Bootstrap (también puedes incluir archivos JavaScript individuales de los únicos plugins que utilices) -->
    	<script src="js/bootstrap.min.js"></script>


    	<script src="js/filesaver.js"></script>
    	<script src="js/html2canvas.js"></script>
		
		<script>
		  	function archivo(evt) {
		    	var files = evt.target.files; // FileList object
		       
		        //Obtenemos la imagen del campo "file". 
		      	for (var i = 0, f; f = files[i]; i++) {         
		           	//Solo admitimos imágenes.
		           	if (!f.type.match('image.*')) {
		                continue;
		           	}
		       
		           	var reader = new FileReader();
		           
		           	reader.onload = (function(theFile) {
		               	return function(e) {
		               	// Creamos la imagen.
		                    document.getElementById("list").innerHTML = ['<img class="thumb1" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
		               	};
		           	})(f);
		 
		           	reader.readAsDataURL(f);
		       	}
			}
			function archivo2(evt) {
		    	var files = evt.target.files; // FileList object
		       
		        //Obtenemos la imagen del campo "file". 
		      	for (var i = 0, f; f = files[i]; i++) {         
		           	//Solo admitimos imágenes.
		           	if (!f.type.match('image.*')) {
		                continue;
		           	}
		       
		           	var reader = new FileReader();
		           
		           	reader.onload = (function(theFile) {
		               	return function(e) {
		               	// Creamos la imagen.
		                    document.getElementById("list2").innerHTML = ['<img class="thumb2" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
		               	};
		           	})(f);
		 
		           	reader.readAsDataURL(f);
		       	}
			}
		             
		    document.getElementById('part_image1').addEventListener('change', archivo, false);
		    document.getElementById('part_image2').addEventListener('change', archivo2, false);

		    $(function() { 
		        $("#crearimagen").click(function() { 
		            html2canvas($("#imagen-creada"), {
		                onrendered: function(canvas) {
		                    canvas.id = "canvas";
		                    document.getElementById("result-image").appendChild(canvas);

		                    var canvas = document.getElementById("canvas");
					    	var imgCanvas = canvas.toDataURL("image/png",1);
					    	var dataUrl = imgCanvas.split('base64,')[1];
					    	$.ajax({
								type: "POST",
								  	url: "php/canvas-upload.php",
								  	data: { 
								     	img: dataUrl
								  	},
							}).done(function(o) {
							  	console.log('saved');
							  	//window.open(imgCanvas, "Ejemplo", "width=400, height=400");
							  	setTimeout("location.href='compartir.php'",10);
							});
		                }
		            });
		        });
		    });
		</script>
	</body>
</html>