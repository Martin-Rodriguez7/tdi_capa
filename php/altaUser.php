<?php require('./header.php') ?>
<div id="content" class="bg-light shadow p-3">
    <div class="container tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-altaUser" role="tabpanel" aria-labelledby="pills-altaUser-tab">
            <div class="row align-items-stretch shadow-lg rounded-3">
                <div class="col p-3 rounded" aria-labelledby="pills-altaUser-tab">
                    <h2 class="fw-bold text-left pt-2 mb-3">Formulario de Alta de Usuarios</h2>
                    <form action="#" method="POST" class="formulario" id="formulario">

                        <div class="mb-4 mt-4 formulario__grupo" id="grupo__usuario">
                            <label for="usuario" class="formulario__label fw-bold">Usuario</label>
                            <div class="formulario__grupo-input">
                                <input type="text" placeholder="Ingrese el nombre de usuario" class="formulario__input" id="usuario" name="usuario">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="ps-1 mt-1 formulario__input-error">Debe contener numeros y letras
                                minusculas y
                                mayusculas. Max. 10 Carácteres.</p>
                        </div>

                        <div class="mb-4 formulario__grupo" id="grupo__correo">
                            <label for="correo" class="fw-bold formulario__label" name="correo">Correo
                                Electrónico</label>
                            <div class="formulario__grupo-input">
                                <input type="email" placeholder="Ingrese su correo" class="formulario__input" name="correo" id="correo">
                                <i class="formulario__validacion-estado  fas fa-times-circle"></i>
                            </div>
                            <p class="ps-1 formulario__input-error">El correo solo puede contener letras,
                                numeros, puntos, guiones y guion bajo.</p>
                        </div>

                        <div class="mb-4 formulario__grupo" id="grupo__password">
                            <label for="password" class="formulario__label fw-bold">Contraseña</label>
                            <div class="formulario__grupo-input">
                                <input type="password" placeholder="Ingrese su Clave" id="password" class="formulario__input" name="password">
                                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                            </div>
                            <p class="ps-1 formulario__input-error">Minimo 8 caracteres alfanumericos,Debe
                                contener
                                minusculas y mayusculas.</p>
                        </div>

                        <div class="formulario__mensaje" id="formulario__mensaje">
                            <p class="fw-bold"><i class="fas fa-exclamation-triangle"></i> Porfavor rellena
                                los campos correctamente.</p>

                        </div>

                        <div class="formulario__grupo formulario__grupo-btn-enviar">
                            <button type="submit" class="btn btn-primary formulario__btn">Guardar</button>

                            <p class="formulario__mensaje-exito pt-2 ps-2 fw-bold" id="formulario__mensaje-exito">¡Usuario dado de alta exitosamente!</p>
                        </div>

                    </form>
                </div>
                <div class="col d-none d-lg-block col-md-5 col-lg-5 col-xl-6 p-5">
                    <img class="mx-auto d-block w-75" id="add-user-img" src="../img/add-user-profile.png" alt="img-alta-usuario">
                </div>
            </div>
        </div>
    </div>
</div>

<?php require('./layout/modales/modales.php') ?>
<?php require('./footer.php') ?>