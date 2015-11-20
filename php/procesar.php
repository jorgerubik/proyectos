<?php

    ob_start(); 
	session_start();

	require('../php/const.php');
	require('../php/conexion.php');
	require('../php/utiles.php');

	$tabla = "registro_participacion";
	$tabla2 = "users";


	$fecha = $_POST['part_edad'];
	$invert = explode("/", $fecha);
	$fecha_invet = $invert[2]."/".$invert[1]."/".$invert[0];
	list($anio2,$mes2,$dia2) = explode("/",$fecha_invet);

	$dia = date("j");
	$mes = date("n");
	$anio = date("Y");

	//determina si el usuario es mayor de edad o no
	if (($mes2 == $mes) && ($dia2 > $dia)){
		$anio = ($anio - 1);
	}
	if ($mes2 > $mes){
		$anio = ($anio - 1);
	}
	//se obtiene la edad del usuario
	$edad = $anio - $anio2;
	$mayor = 18;
	//Si el usuario no es mayor de edad se le notifica y regresa al index
	//En caso contrario, el usuario es registrado
	if ($edad < $mayor){
		echo 2;	
	}else{
		
		$columna[0] = "id";
		$columna[1] = "id_user";
		$columna[2] = "nombre";
		$columna[3] = "apellidos";
		$columna[4] = "email";
		$columna[5] = "telefono";
		$columna[6] = "movil";
		$columna[7] = "estado";
		$columna[8] = "ciudad";
		$columna[9] = "sucursal";
		$columna[10] = "fotografia";
		$columna[11] = "activo";
		$columna[12] = "fecha_nacimiento";

		$datos[0] = "NULL";
		$datos[1] = $_SESSION['id'];
		$datos[2] = "'".$_POST['part_nombre']."'";
		$datos[3] = "'".$_POST['part_apellido']."'";
		$datos[4] = "'".$_POST['part_email']."'";
		$datos[5] = "'".$_POST['part_telefono']."'";
		$datos[6] = "'".$_POST['part_movil']."'";
		$datos[7] = "'".$_POST['part_estado']."'";
		$datos[8] = "'".$_POST['part_ciudad']."'";
		$datos[9] = "'".$_POST['part_sucursal']."'";
		$datos[10] = "''";
		$datos[11] = 1;
		$datos[12] = "'".$fecha_invet."'";

		altaUsuario($tabla, $datos, $columna);
	    
	    $mysqli = conectar_db();
	    selecciona_db($mysqli);
	    //agrega uno al nomero de registro
	    $id = $_SESSION['id'];

	    $Consult = "SELECT * FROM users WHERE id='$id'";
		$pConsult = consulta_tb($mysqli, $Consult);

		$dato = mysqli_fetch_array($pConsult);
		$dato2[0]= $dato['no_registro'] + 1;
		$columna2[0] = "no_registro";
		updateUsuario($tabla2, $dato2, $columna2, $id);




	    $Consulta = "SELECT id FROM registro_participacion ORDER BY id DESC Limit 1";
		$pConsulta = consulta_tb($mysqli, $Consulta);

		$datos = mysqli_fetch_array($pConsulta);

		if($datos[0] == NULL){
			echo 0;
		}else{
			$_SESSION['id_registro']=$datos[0];
			echo 1;
		}
	    cerrar_db($mysqli);
	    
		//header("Location: ../images.php");
	}	

?>