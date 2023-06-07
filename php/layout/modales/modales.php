  <!-- MODAL EDITAR REGISTROS-->
  <div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">

<div class="modal-dialog">
    <div class="modal-content modal-lg">
        <div class="modal-header">

            <h1 class="modal-title fs-5" id="exampleModalLabel">Editar registro</h1>

            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>

        </div>

        <div class="modal-body">
            <form action="#" method="POST" enctype="multipart/form-data">

                <input type="hidden" id="id" name="id">

                <div class="md-3">
                    <label for="nombre" class="form-label">Nombre: </label>
                    <input type="text" id="edit_nombre" name="nombre" class="form-control" required>
                </div>

                <div class="md-3 mt-2">
                    <label for="correo" class="form-label">Correo: </label>
                    <input id="edit_correo" name="correo" class="form-control" required>
                </div>
                <div class="md-3 mt-2">
                    <label for="genero" class="form-label">Fecha de Registro: </label>
                    <input class="form-control" type="datetime" name="fechaReg" id="edit_fechaReg">
                </div>
                <div class="formulario__mensaje" id="formulario__mensaje_EDITAR">
                    <p class="fw-bold"><i class="fas fa-exclamation-triangle"></i> Porfavor rellena
                        los campos correctamente.</p>

                </div>
                <div class="mt-3">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button id="btn_editar_user" type="button" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i>
                        Guardar</button>
                </div>

            </form>
        </div>

    </div>
</div>
</div>
<!-- MODAL AGREGAR REGISTROS-->
<div class="modal fade" id="modalRegistro" tabindex="-1" aria-labelledby="modalRegistroLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content modal-lg">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar registro</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
            <form id="form_User_modal" method="POST" enctype="multipart/form-data">

                <input type="hidden" id="id" name="id">

                <div class="md-3">
                    <label for="nombre" class="form-label">Nombre: </label>
                    <input type="text" id="ag__nombre" name="nombre" class="form-control" required>
                </div>

                <div class="md-3 mt-2">
                    <label for="correo" class="form-label">Correo: </label>
                    <input id="ag__correo" name="correo" class="form-control" required>
                </div>
                <div class="md-3 mt-2">
                    <label for="genero" class="form-label">Fecha de Registro:: </label>
                    <input class="form-control" id="fecharreg" type="datetime" name="fechaReg" disabled>
                </div>

                <div class="md-3 mt-2">
                    <label class="form-label">Fotos: </label>
                    <div class="m-2 " id="imgModal">

                    </div>

                </div>

                <div class="modal__mensaje" id="modal__mensaje">
                    <p class="fw-bold"><i class="fas fa-exclamation-triangle"></i> ¡Porfavor selecciona una
                        imagen!</p>
                </div>
                <div class="mt-3">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" id="btn_ag_user_modal" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i>
                        Agregar</button>
                </div>

            </form>
        </div>

    </div>
</div>
</div>

<!-- MODAL ELIMINAR REGISTROS-->
<div class="modal fade" id="eliminarModal" tabindex="-1" aria-labelledby="eliminarModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm">
    <div class="modal-content modal-sm">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Registro</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body ">
            ¿Desea eliminar el registro?
            <div class="modal-footer">
                <form action="#" method="POST">
                    <input type="hidden" name="id" id="id">
                    <button type="button" data-bs-dismiss="modal" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-xmark"></i> Cerrar</button>
                    <button type="button" id="btnBorrar" class="btn btn-danger"> <i class="fa-regular fa-trash-can"></i>
                        Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>