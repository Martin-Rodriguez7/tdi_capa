<?php require('./header.php') ?>

<div id="content" class="bg-light shadow p-3">
    <div class="row align-items-stretch shadow-lg rounded-3">
        <div class="col p-3 rounded">
            <h2 class="fw-bold text-left pt-2 mb-3 d-inline-block">Lista de Usuarios</h2>
            <button id="btn-agregar" class="mb-3 ms-5 btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalRegistro"> <i class="icon ion-md-add ps-1"></i> Agregar
                Usuario</button>
            <table id="tabla_User" class="table pt-3 table-sm table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Correo</th>
                        <th class="text-center">Fecha de registracion</th>
                        <th class="text-center">Foto</th>
                        <th class="text-center">Accion</th>
                    </tr>
                </thead>
                <tbody id="data">

                </tbody>
            </table>
        </div>
    </div>
</div>
<?php require('./layout/modales/modales.php') ?>
<?php require('./footer.php') ?>