<?php

$link = 'mysql:host=localhost; dbname=id12383899_colores';
$usuario = 'id12383899_coloresb';
$pass = '12345';

try{
    $pdo = new PDO($link, $usuario, $pass);
    //echo 'conectado';
}catch(PDOException $e){
    print "¡Error!: ". $e->getMessage(). "</br>";
    die();
}
