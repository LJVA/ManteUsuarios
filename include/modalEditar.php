<div>
    <div class="container">
        <div class="table-wrapper">
            <form action="mantenimiento.php" method="post">
                <div class="table-title">
                    <h4 class="">Editar Usuario</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <?php
                        $UsuarioEditar = obtenerUsuarioEditar();
                        if(count($UsuarioEditar)>0){?>
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="nombre"  value="<?php echo $UsuarioEditar['nombre']?>">
                    </div>
                    <div class="form-group">
                        <label>Correo</label>
                        <input type="email" class="form-control" name="correo" value="<?php echo $UsuarioEditar['correo']?>">
                    </div>
                    <div class="form-group">
                        <label>Dirección</label>
                        <input type="text" class="form-control" name="direccion"  value="<?php echo $UsuarioEditar['direccion']?>">
                    </div>
                    <div class="form-group">
                        <label>Teléfono</label>
                        <input type="text" class="form-control" name="telefono" value="<?php echo $UsuarioEditar['telefono']?>">
                    </div>
                    <?php
                        }else{
                    ?>        
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="">
                    </div>
                    <div class="form-group">
                        <label>Correo</label>
                        <input type="email" class="form-control" name="correo" value="">
                    </div>
                    <div class="form-group">
                        <label>Dirección</label>
                        <textarea class="form-control" name="direccion" placeholder="" ></textarea>
                    </div>
                    <div class="form-group">
                        <label>Teléfono</label>
                        <input type="text" class="form-control" name="telefono" value="">
                    </div>
                    <?php
                        }
                    ?>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-default" data-dismiss="modal" name="accion" value="Cancelar">
                    <input type="submit" class="btn btn-info" name="accion" value="Guardar Cambios">
                </div>
            </form>
        </div>
    </div>
</div>  