
<?php

include '../bdd/conexion.php';
?>
<table class="table table-condensed">
                                <thead>
                                    <th>Código</th>
                                    <th>Descripción de producto</th>
                                    <th>Cant.</th>
                                   <th>Valor</th>
                                    <th>Aciones</th>
                                </thead>
                                <tbody>
<?php

$consulta=$pdo->query("select * from tbl_inventario order by  nom_producto ");
$contador=0;

while($fila=$consulta->fetch()){
$contador ++;
                                    ?>
                                    <tr>
                                        <td><?= $contador?></td>
                                        <td><?= utf8_encode( $fila['nom_producto'])?></td>
                                        <td><?= $fila['can_producto']?></td>
                                        <td><?= $fila['val_producto']?></td>
                                        <td>
                                            <button type="button" name="" id="" class="btn btn-warning btn_editar" data-id="<?= $fila['idx_inventario'] ?>"><ion-icon name="create-outline"></ion-icon></button>
                                            <button type="button" name="" id="" class="btn btn-danger btn_elimininar" data-id="<?= $fila['idx_inventario'] ?>"><ion-icon name="trash-outline"></ion-icon></button>
                                            <button type="button" name="" id="" data-id="<?= $fila['idx_inventario'] ?>" class="btn btn-primary btn_imprimir" ><ion-icon name="print-outline"></ion-icon></button>
                                        </td>
                                    </tr>
                                    <?php
                                    };
                                    ?>
                                    
                                </tbody>
                            </table>
                            <script src="js/app.js"></script>