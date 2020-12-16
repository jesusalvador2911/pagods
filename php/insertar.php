<?php 

include 'config.php';

$mysqli = new mysqli($Host, $User, $Password, $Dbname, $Port, $Socket);

if ($mysqli->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}

//Datos del Formulario
$campo1 = $_POST['c1'];
$campo2 = $_POST['c2'];
$campo3 = $_POST['c3'];

$query_insert = "INSERT INTO tabla_generica(
                campo_numerico1,
                campo_cadena_texto2,
                campo_cadena_texto3
                )
                VALUES(
                $campo1,
                '$campo2',
                '$campo3'
                );";
                    
$mysqli ->query($query_insert);


$mysqli->close();

header('Location: /index.php');


?>