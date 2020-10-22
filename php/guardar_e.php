<?php
if($_POST){
    
    include '../bdd/conexion.php';
    $codigo=$_POST['codi'];

$descripcion=$_POST['producto'];
$cant=$_POST['cantidad'];
$valor=$_POST['valor'];

$editar=$pdo->query("UPDATE tbl_inventario SET nom_producto ='$descripcion', can_producto='$cant',val_producto='$valor' WHERE idx_inventario ='$codigo'");
// print_r($pdo->errorINfo());

if($editar){

    echo 2;
} else {
    echo 1;

}

return;



}




?>