
<?php
include '../bdd/conexion.php';
?>

                            <table class="table table-condensed ">
                                <thead>
                                    <th>Codigo</th>
                                    <th>Descripcion del Producto</th>
                                    <th>cant</th>
                                    <th>valor</th>
                                    <th>acciones</th>
                                </thead>

                                <tbody>

                                <?php
                                $consulta=$pdo->query("Select * from tbl_inventario ");
                                $contador=0;
                                while($fila= $consulta->fetch() ){
                                 $contador =$contador+1;
                                ?>
                                    <tr>
                                        <td><?= $contador?></td>
                                        <td><?= $fila['nom_producto']?></td>
                                        <td><?= $fila['can_producto']?></td>
                                        <td><?= $fila['val_producto']?></td>
                                        <td>
                                            <button type="button" name="" id="" class="btn btn-primary btn-sm "><ion-icon name="brush-outline"></ion-icon></button>
                                            <button type="button" name="" id="" class="btn btn-danger btn-sm "><ion-icon name="archive-outline"></ion-icon></button>

                                            <button type="button" name="" id="" class="btn btn-warning btn-sm "><ion-icon name="beaker-outline"></ion-icon></button>

                                        </td>
                                    </tr>
                                    <?php
                                }
                                    ?>
                                </tbody>

                            </table>
