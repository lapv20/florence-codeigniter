<?php include_once('header.php'); ?>
    <div class="container">
        <div class="page-header">
            <h3>Informacion de las personas</h3>
        </div>
        <div class="col-lg-12">
            <div class="row">
                <div class="table-responsive"><table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Telefono</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!$datos) { echo "<tr><td colspan=3>No hay ningun dato para mostrar</td></tr>"; }
                        foreach ($datos as $dato) { ?>
                            <tr>
                                <td><?php echo $dato->nombre; ?></td>
                                <td><?php echo $dato->apellido; ?></td>
                                <td><?php echo $dato->telefono; ?></td>
                                <td>Menu</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table></div>
                <a href="agregar" class="btn btn-primary">Añadir uno nuevo</a>
            </div>
        </div>
    </div>
<?php include_once('footer.php'); ?>