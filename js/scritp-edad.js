	$("#verificar1").click(function(){
		var part_edad = document.getElementById("part_edad").value;
		var part_nombre = document.getElementById("part_nombre").value;
		var part_apellido = document.getElementById("part_apellido").value;
		var part_email = document.getElementById("part_email").value;
		var part_telefono = document.getElementById("part_telefono").value;
		var part_movil = document.getElementById("part_movil").value;
		var part_estado = $("#primary").val();
		var part_ciudad = document.getElementById("part_ciudad").value;
		var part_sucursal = $("#secondary").val();

		if(part_nombre == "" || part_edad == "" || part_apellido == "" || part_email == "" || part_telefono == "" || part_movil == "" || part_estado == "" || part_ciudad == "" || part_sucursal == ""){
				$("#alert-danger3").removeClass("hidden");
				$("#alert-danger2").addClass("hidden");
		}else{

				$.ajax({
					type: 'POST',
					url: 'php/procesar.php',
					data: {
						part_edad: part_edad,
						part_nombre: part_nombre,
						part_apellido: part_apellido,
						part_email: part_email,
						part_telefono: part_telefono,
						part_movil: part_movil,
						part_estado: part_estado,
						part_ciudad: part_ciudad,
						part_sucursal: part_sucursal
					},

					
				}).done(function(resultado){
					if(resultado == 2){
						$("#alert-danger2").removeClass("hidden");
						$("#alert-danger3").addClass('hidden');
					}else{
						window.location="images.php";
					}
				});
		}
			});
	 