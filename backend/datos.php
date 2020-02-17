<?php
//$datos = ['dolar' => 500, 'euro' => 700];
//$peticion = $_GET['variable'];

header('Access-Control-Allow-Origin: *'); //CORS permitir peticiones de cualquiera (API Pública)
header('Content-Type: application/json');

if($_GET['moneda']=='dolar' || $_GET['moneda']=='euro'){
    include_once 'conexion.php';

    $sql_leer = 'SELECT * FROM '. $_GET['moneda'];
    $gsent = $pdo->prepare($sql_leer);
    $gsent->execute();
    $resultado = $gsent->fetchAll();

    echo json_encode($resultado);

}else{
    echo 'Moneda no encontrada';
}


//echo json_encode($peticion);