<?php
include '../bdd/conexion.php';

if($_GET){


$codigo= $_GET['id'];
$consulta=$pdo->query("SELECT * FROM tbl_inventario WHERE idx_inventario='$codigo'");

$resultado= $consulta->fetch();

echo json_encode($resultado);
}