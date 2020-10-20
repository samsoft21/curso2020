<?php
if($_POST){
    
    include'../bdd/conexion.php';

$_descripcion=$_POST['producto'];
$cant=$_POST['cantidad'];
$valor=$_POST['valor'];

$guardar=$pdo->query("INSERT INTO tbl_inventario(	nom_producto, can_producto, val_producto) values('$_descripcion', '$cant', '$valor')");

if($guardar){

    echo 2;
} else {
    echo 1;

}

return;



}




?>