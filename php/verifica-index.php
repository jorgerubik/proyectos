<?php
	require('../php/const.php');
	require('../php/conexion.php');
    
    $mysqli = conectar_db();
    selecciona_db($mysqli);

	$matricula=$_POST["no_funcard"];

    $Consulta = "SELECT * FROM users WHERE matricula='$matricula' and activo=1";
	$pConsulta = consulta_tb($mysqli, $Consulta);

	$datos = mysqli_fetch_array($pConsulta);

	if($datos[0] == NULL){
		session_start();
		$_SESSION['matricula']="";
		echo 0;
	}elseif ($datos['no_registro'] >= 3) {
		session_start();
		$_SESSION['matricula']="";
		echo 2;
	}
	else{
		session_start();
		$_SESSION['matricula']=$matricula;
		$_SESSION['id']=$datos[0];
		echo 1;
	}


	cerrar_db($mysqli);
?>