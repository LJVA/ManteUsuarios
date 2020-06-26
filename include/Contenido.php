  <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Administración de Usuarios</h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons"></i> <span>Agregar Usuario</span></a>
                        <a href="mantenimiento.php?accion=EliminarSesion" class="btn btn-danger" data-toggle="modal"><i class="material-icons"></i> <span>Eliminar</span></a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $lista = obtenerListaUsuarios();
                        if(count($lista)>0){
                            foreach ($lista as $indice => $usuario){?>
                            <tr>
                                <td><?php echo $usuario['nombre']?></td>
                                <td><?php echo $usuario['correo']?></td>
                                <td><?php echo $usuario['direccion']?></td>
                                <td><?php echo $usuario['telefono']?></td>
                                <td>
                                    <a href="#" class="edit"><i class="material-icons" >&#xE254;</i></a>
                                    <a href="#" class="delete"><i class="material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                    <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

