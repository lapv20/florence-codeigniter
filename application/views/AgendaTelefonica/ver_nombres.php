<?php include_once(APPPATH.'views/header.php'); ?>
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Agenda Telefónica</a></li>
            <li class="active">Ver Contactos</li>
        </ol>
        <div class="row">
            <div class="col-lg-12">
            <?php if (isset($mensajes) && $mensajes) { echo "<div class='alert alert-danger' role='alert'>".$mensajes."</div>"; } ?>
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
                        <?php if (!$datos) { echo "<tr style='text-align: center;'><td colspan=5>No hay ningun dato para mostrar</td></tr>"; }else{
                        foreach ($datos as $dato) { ?>
                            <tr>
                                <td><?php echo $dato->nombre; ?></td>
                                <td><?php echo $dato->apellido; ?></td>
                                <td><?php echo $dato->telefono; ?></td>
                                <td><?php echo $dato->correo; ?></td>
                                <td>
                                    <a class="btn btn-default" href="<?php echo base_url().'signup/eliminar/id/'.$dato->id; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                                    <a class="btn btn-default" href="<?php echo base_url().'signup/editar/id/'.$dato->id; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                                </td>
                            </tr>
                        <?php }} ?>
                    </tbody>
                </table></div>
            </div>
        </div>
    </div>
<?php include_once(APPPATH.'views/footer.php'); ?>
