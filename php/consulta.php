<?php

include 'config.php';

$mysqli = new mysqli($Host, $User, $Password, $Dbname, $Port, $Socket);

if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}

if ($resultado = $mysqli->query("SELECT * FROM tabla_generica")) {
    //printf("La selección devolvió %d filas.\n", $resultado->num_rows);

    while($row = $resultado->fetch_array()){
        echo"
          <tr>
              <td>".$row['id']."</td>
              <td>".$row['campo_numerico1']."</td>
              <td>".$row['campo_cadena_texto2']."</td>
              <td>".$row['campo_cadena_texto3']."</td>
            </tr>
          ";
    }

    $resultado->close();
}

$mysqli->close();

?>