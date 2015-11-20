<?php
/* ---------- Alta Usuario ---------- */
    // nuevos registros en tablas de la bd
    function altaUsuario($tabla, $datos, $columna){
        $mysqli = conectar_db();
        selecciona_db($mysqli);

        $Consulta = "INSERT INTO $tabla VALUES (";
            for ($i = 0; $i < count($datos); $i++) {
                $Consulta = $Consulta.$datos[$i];
                if ($i != count($datos) - 1)
                    $Consulta.=",";
            }
            $Consulta.=")";

        $pConsulta = consulta_tb($mysqli, $Consulta);

        if (!$pConsulta) {
            echo 0;
        }else{
            echo 1;
        }
        cerrar_db($mysqli);
    }

    // actualizar registros en tablas de la bd
    function updateUsuario($tabla, $datos, $columna, $id){
        $mysqli = conectar_db();
        selecciona_db($mysqli);

        $Consulta = "UPDATE $tabla SET ";
        for ($i = 0; $i < count($datos); $i++) {
            $Consulta = $Consulta.$columna[$i].'='.$datos[$i];
            if ($i != count($datos) - 1)
                $Consulta.=",";
        }
        $Consulta.=" WHERE id=".$id;

        $pConsulta = consulta_tb($mysqli, $Consulta);

        if (!$pConsulta) {
            echo 0;
        }else{
            echo 1;
        }
        cerrar_db($mysqli);
    }
?>