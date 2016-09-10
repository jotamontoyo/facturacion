
    <?php

    // incluir la DB
    include_once('../clases/class.Database.php');

    if (isset($_GET["pag"])) {
        $pag = $_GET["pag"];
    } else {
        $pag = 1;
    }


    $respuesta = Database::get_todo_paginado('clientes', $pag);             // get_todo_paginado() es una funcion definida el class.Database.php

    echo json_encode($respuesta);




    ?>
