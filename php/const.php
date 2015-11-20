<?php
  define("SERVER","localhost");   		// Servidor de internet
  define("USER","root");          		// Usuario con el que se interactua
  define("PASSWORD","");          		// Pasword del user
  define("DATABASE","gymboree");     	// Nombre de la base de datos del sistema

  $host  = $_SERVER['HTTP_HOST'];
  $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

  define("URL","");		//Si esta en localhost, dejar vacía la dirección.
  define("CARPETA","gymboree");		//Carpeta donde se encuentran los archivos.

  define("URLWEB", URL."/".CARPETA);
?>
