<style>
#nombre{
    text-transform: capitalize;

}

</style>


  <div class="row">
    
            <div class="col-10">
             <input type="text" class="form-control nombre" id="nombre" placeholder="Descripcion de producto" required >
            </div>
            
            <div class="col-4 offset-1 mt-2">
             <input type="text" id="cant" class="form-control" placeholder="Cant"  maxLength="3" required>
            </div>


            <div class="col-4 mt-2">
             <input type="text" id="precio" class="form-control" placeholder="Valor" required>
            </div>
<div class="row mt-2 d-flex justify-content-center flex-nowrap">
        <div class="col-6 offset-2 ">  
            <button type="button" class="btn btn-info guardar">Guardar</button> 
             
            <button type="reset" class="btn btn-danger cancela">Cancelar</button> 

             </div>
    </div>

</div>


<script src="js/app.js"></script>