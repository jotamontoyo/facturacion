
    <?php

    // incluir la DB
    include_once('../clases/class.Database.php');

    $postdata = file_get_contents("php://input");

    $request = json_decode($postdata);
    $request = (array) $request;

    if (isset($request['id'])) {        // actualizar

        $sql = "UPDATE clientes
                    SET
                        nombre='". $request['nombre'] ."',
                        correo='". $request['correo'] ."',
                        zip='". $request['zip'] ."',
                        telefono1='". $request['telefono1'] ."',
                        telefono2='". $request['telefono2'] ."',
                        pais='". $request['pais'] ."',
                        direccion='". $request['direccion'] ."'
                WHERE id=" . $request['id'];

        $hecho = Database::ejecutar_idu($sql);

        if (is_numeric($hecho) OR $hecho === true) {
            $respuesta = array('err' => false, 'Mensaje' => 'Registro actualizado');
        } else {
            $respuesta = array('err' => true, 'Mensaje' => $hecho);
        }

    } else {                            // insertar

        $sql = "INSERT INTO clientes(nombre, correo, zip, telefono1, telefono2, pais, direccion)
            VALUES ('". $request['nombre'] . "',
                    '". $request['correo'] . "',
                    '". $request['zip'] . "',
                    '". $request['telefono1'] . "',
                    '". $request['telefono2'] . "',
                    '". $request['pais'] . "',
                    '". $request['direccion'] . "')";

        $hecho = Database::ejecutar_idu($sql);

        if (is_numeric($hecho) OR $hecho === true) {
            $respuesta = array('err' => false, 'Mensaje' => 'Registro añadido');
        } else {
            $respuesta = array('err' => true, 'Mensaje' => $hecho);
        }

    };

    echo json_encode($respuesta);


    ?>
