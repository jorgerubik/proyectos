<?php
	session_start();

	$nombre_image = uniqid($_SESSION['matricula']."-");

	// requires php5
	define('UPLOAD_DIR', '../images/');
	$img = $_POST['img'];
	$img = str_replace('data:image/png;base64,', '', $img);
	$img = str_replace(' ', '+', $img);
	$data = base64_decode($img);
	$file = UPLOAD_DIR . $nombre_image . '.png';
	$success = file_put_contents($file, $data);
	print $success ? $file : 'Unable to save the file.';

	require('../php/const.php');
	require('../php/conexion.php');
	require('../php/utiles.php');

	$tabla = "registro_participacion";

	$id = $_SESSION['id_registro'];

	$columna[0] = "fotografia";

	$datos[0]="'".$nombre_image."'";

	updateUsuario($tabla, $datos, $columna, $id);
?>