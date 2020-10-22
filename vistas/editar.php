<style>
#nombre{
    text-transform: capitalize;

}

</style>

<?php
if( $_GET){ 
include '../bdd/conexion.php';

    $codi=$_GET['id'];
    $consulta=$pdo->query("SELECT * FROM tbl_inventario WHERE idx_inventario='$codi'");
    $resultado= $consulta->fetch();


?>
  <div class="row">
    

  <input type="text" id="codi" value=" <?=$resultado['idx_inventario']?>" style="display:none">
            <div class="col-10">
             <input type="text" class="form-control nombre" value="<?= $resultado['nom_producto'] ?>" id="nombre" placeholder="Descripcion de producto" required >
            </div>
            
            
            <div class="col-4 offset-1 mt-2">
             <input type="text" id="cant" class="form-control" value="<?= $resultado['can_producto'] ?>" placeholder="Cant" required>
            </div>


            <div class="col-4 mt-2">
             <input type="text" id="precio" class="form-control" value="<?= $resultado['val_producto'] ?>" placeholder="Valor" required>
            </div>
<div class="row mt-2 d-flex justify-content-center flex-nowrap">
        <div class="col-6 offset-2 ">  
            <button type="button" class="btn btn-info guardarEditar">Editar</button> 
             
            <button type="reset" class="btn btn-danger cancela">Cancelar</button> 

             </div>
    </div>

</div>

<?php
}
?>
<script src="js/app.js"></script>