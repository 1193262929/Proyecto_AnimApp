<div
    class="modal fade"
    id="mi-modal-registrarse"
    tabindex="-1"
    aria-hidden="true"
    aria-labelledby="label-modal-1"
    data-bs-backdrop="static">
    <!-- Caja de dialogo -->
    <div class="modal-dialog">
        <!-- Contenido de la caja -->
        <div class="modal-content w-100">
            <!-- Encabezado del modal -->
            <div class="modal-header">
                <h2 class="fs-5 m-auto">Como te vas a registrar</h2>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <!-- Cuerpo de la caja -->
            <div class="modal-body">
                <form action="/AnimApp/controller/procesarLogin.php" method="POST" class="bg-white w-100 d-flex flex-column rounded px-5">

                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" name="tipo_usuario[]" value="usuario_normal" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            usuario normal
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" name="tipo_usuario[]" value="refugio" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Refugio
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" name="tipo_usuario[]" value="usuarioTienda" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Servicio tienda
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" name="tipo_usuario[]" value="usuarioPaseador" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Servicio paseador
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" name="tipo_usuario[]" value="veterinaria" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Servicio veterinaria
                        </label>
                    </div>

                    <div class="d-flex justify-content-center gap-5 mt-3">
                        <button type="submit" class="btn btn-dark w-50">Crear cuenta</button>
                        <button type="button" class="btn btn-danger w-50" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>
