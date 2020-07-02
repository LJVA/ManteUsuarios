<div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="mantenimiento.php" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Agregar Usuario</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" required name="nombre">
                    </div>
                    <div class="form-group">
                        <label>Correo</label>
                        <input type="email" class="form-control" required name="correo">
                    </div>
                    <div class="form-group">
                        <label>Dirección</label>
                        <textarea class="form-control" required name="direccion"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Teléfono</label>
                        <input type="text" class="form-control" required name="telefono">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                    <input type="submit" class="btn btn-success" name="accion" value="Guardar">
                </div>
            </form>
        </div>
    </div>
</div>  