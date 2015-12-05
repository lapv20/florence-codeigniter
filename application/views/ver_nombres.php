<?php include_once('header.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive"><table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!$datos) { echo "<tr><td colspan=5>No hay ningun dato para mostrar</td></tr>"; }
                        foreach ($datos as $dato) { ?>
                            <tr>
                                <td><?php echo $dato->nombre; ?></td>
                                <td><?php echo $dato->apellido; ?></td>
                                <td><?php echo $dato->telefono; ?></td>
                                <td><?php echo $dato->correo; ?></td>
                                <td>
                                    <a class="btn btn-default" href="<?php echo base_url().'signup/eliminar/contacto/'.$dato->id; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                                    <a class="btn btn-default" href="<?php echo base_url().'signup/editar/contacto/'.$dato->id; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table></div>
            </div>
        </div>
    </div>
<?php include_once('footer.php'); ?>