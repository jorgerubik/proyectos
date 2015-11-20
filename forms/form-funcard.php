<form class="form text-center" method="POST" action="#" name="form-funcard">
	<div class="form-group">
		<label for="no_funcard">Ingrese el número de FunCard</lable>
	</div>
	<div class="form-group">
		<input type="text" class="form-control" placeholder="No. de FunCard" required="true" autofocus="true" name="no_funcard" id="no_funcard">
	</div>
</form>
<div class="form-group">
	<button class="btn btn-primary btn-block" type="submit" id="verificar">
		Verificar
	</button>
</div>

<div id="alert-danger" class="alert alert-danger hidden" role="alert">
  El dato ingresado no es válido. Favor de verificarlo.
</div>

<div id="alert-warning" class="alert alert-warning hidden" roel="alert">
	La matricula ingresada ya cuenta con 3 imagenes
</div>

<div id="alert-success" class="alert alert-success hidden" role="alert">
  Perfecto! Ahora puedes participar.
</div>

<form class="form text-center hidden" method="POST" action="#" enctype="multipart/form-data" name="form-datos" id="form-datos">
	<input class="hidden" type="text" id="no_oculto" name="no_oculto">
	<legend>Datos del participante</legend>
	<div class="form-group">
		<input type="text" class="form-control" placeholder="Nombre" autofocus="true" name="part_nombre" id="part_nombre" required="true"/>
	</div>
	<div class="form-group">
		<input type="text" class="form-control" placeholder="Apellido" required="true" name="part_apellido" id="part_apellido">
	</div>
	<div class="form-group">
		<input type="email" class="form-control" placeholder="E-mail" required="true" name="part_email" id="part_email">
	</div>
	<div class="form-group">
		<input type="text" class="form-control" placeholder="Teléfono" required="true" name="part_telefono" id="part_telefono">
	</div>
	<div class="form-group">
		<input type="text" class="form-control" placeholder="Móvil" required="true" name="part_movil" id="part_movil">
	</div>

	<div class="form-group">
		<div>
       		<input type="text" class="form-control" placeholder="Edad" id="part_edad" name="part_edad" >
    	</div>
    </div>

	<div class="form-group">
		<select class="form-control" required="true" name="part_estado" id="primary">
		  	<option value="">Estado</option>
		  	<option value="BajaCalifornia">Baja California</option>
		  	<option value="BajaCaliforniaSur">Baja California Sur</option>
		  	<option value="Campeche">Campeche</option>
		  	<option value="Coahuila">Coahuila</option>
		  	<option value="Colima">Colima</option>
		  	<option value="DistritoFederal">Distrito Federal</option>
		  	<option value="Durango">Durango</option>
		  	<option value="EstadodeMexico">Estado de México</option>
		  	<option value="Guanajuato">Guanajuato</option>
		  	<option value="Hidalgo">Hidalgo</option>
		  	<option value="Jalisco">Jalisco</option>
		  	<option value="Michoacán">Michoacán</option>
		  	<option value="Morelos">Morelos</option>
		  	<option value="Nayarit">Nayarit</option>
		  	<option value="NevoLeon">Nevo León</option>
		  	<option value="Puebla">Puebla</option>
		  	<option value="Queretaro">Querétaro</option>
		  	<option value="QuintanaRoo">Quintana Roo</option>
		  	<option value="SanLuisPotosi">San Luis Potosí</option>
		</select>
	</div>
	<div class="form-group">
		<input type="text" class="form-control" placeholder="Ciudad" required="true" name="part_ciudad" id="part_ciudad">
	</div>
	<div class="form-group">
		<select class="form-control" required="true" name="part_sucursal" id="secondary">
		</select>
	</div>
	<legend></legend>
	<div class="checkbox">
	    <label>
	      	<input type="checkbox" required="true"> He leído las bases del concurso y estoy de acuerdo
	    </label>
	</div>
	<div class="checkbox">
	    <label>
	      	<input type="checkbox" required="true"> He leído el aviso de privacidad y estoy de acuerdo
	    </label>
	</div>
</form>

	<legend></legend>
	
		<div class="form-group hidden" id="form-group">
			<button class="btn btn-success btn-block" type="submit" id="verificar1">
				Aceptar y Participar
			</button>
		</div>
	
	<div id="alert-danger2" class="alert alert-danger hidden" roel="alert">
	Requiere ser mayor de edad para poder concursar.
	</div>
	<div id="alert-danger3" class="alert alert-danger hidden" roel="alert">
	Favor de llenar todos los campos.
	</div>

