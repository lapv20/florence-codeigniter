<?php include_once('header.php'); ?>
    <div class="container">
        <div class="page-header">
            <h3>Informacion de las personas</h3>
        </div>
        <div class="col-lg-12">
            <div class="row">
                    <table class="table">
                        <tr>
                            <td>Nombre</td>
                            <td>Apellido</td>
                            <td>Telefono</td>
                            <td>Opciones</td>
                        </tr>

                        <?php
                        
                        if (!$datos) {
                            echo "<tr><td colspan=3>No hay ningun dato para mostrar</td></tr>";
                        }
                        foreach ($datos as $dato) { ?>
                            <tr>
                                <td><?php echo $dato->nombre; ?></td>
                                <td><?php echo $dato->apellido; ?></td>
                                <td><?php echo $dato->telefono; ?></td>
                                <td>Menu</td>
                            </tr>
                        <?php } ?>
                    </table>

                    <a href="agregar" class="btn btn-primary">Volver al formulario</a>
            </div>
        </div>
    </div>
<?php include_once('footer.php'); ?>