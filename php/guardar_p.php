<?php
if($_POST){
    
    include'../bdd/conexion.php';

$_descripcion=limpiarString(limpiarNombre(ucwords($_POST['producto'])));
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






function limpiarNombre($string ){
    $string = htmlentities($string);
    $string = preg_replace('/\&(.)[^;]*;/', '\\1', $string);
    return $string;
   }

function limpiarString($texto)
{
      $textoLimpio = preg_replace('([^A-Za-z0-9])', ' ', $texto);	
           					
      return $textoLimpio;
}



?>