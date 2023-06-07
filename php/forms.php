<?php require('./header.php') ?>
<div id="content" class="bg-light shadow p-3">
    <div class="row align-items-stretch shadow-lg rounded-3">
        <div class="col p-3 rounded" aria-labelledby="pills-altaUser-tab">
            <h2 class="fw-bold text-left pt-2 mb-3">Formularios</h2>
            <div class="accordion" id="accordionForm">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOneF">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneF" aria-expanded="true" aria-controls="collapseOneF">
                            Formulario Numero 1
                        </button>
                    </h2>
                    <div id="collapseOneF" class="accordion-collapse collapse" aria-labelledby="headingOneF" data-bs-parent="#accordionForm">
                        <div class="accordion-body">
                            <div class="row">
                                <form method="POST" class="formulario" id="formulario1" name="formulario" value="form1">
                                    <div class="mb-4 mt-4 formulario__grupo" id="grupo__nombre">
                                        <label for="nombre" class="formulario__label fw-bold">Nombre</label>
                                        <div class="formulario__grupo-input">
                                            <input type="text" placeholder="Ingrese un nombre" class="formulario__input" id="nombre" name="nombre">
                                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                        </div>
                                        <p class="ps-1 mt-1 formulario__input-error fw-bold">*Ingrese alemenos 10 caracteres.</p>
                                    </div>


                                    <div class="mb-4 formulario__grupo" id="grupo__correoForm">
                                        <label for="correo" class="fw-bold formulario__label" name="correo">Correo
                                            Electrónico</label>
                                        <div class="formulario__grupo-input">
                                            <input type="email" placeholder="Ingrese su correo" class="formulario__input" name="correoForm" id="correoForm">
                                            <i class="formulario__validacion-estado  fas fa-times-circle"></i>
                                        </div>
                                        <p class="ps-1 formulario__input-error">El correo solo puede
                                            contener letras,
                                            numeros, puntos, guiones y guion bajo.</p>
                                    </div>

                                    <div class="mb-4 formulario__grupo" id="grupo__telefono">
                                        <label for="telefono" class="formulario__label fw-bold">Telefono</label>
                                        <div class="formulario__grupo-input">
                                            <input type="number" placeholder="Ingrese su telefono" id="telefono" class="formulario__input" name="telefono">
                                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                        </div>
                                        <p class="ps-1 formulario__input-error fw-bold">*Éste campo es opcional.</p>
                                    </div>

                                    <div class="mb-4 formulario__grupo" id="grupo__select">
                                        <label for="combo" class="formulario__label fw-bold">Urgencia</label>
                                        <div class="formulario__grupo-input">
                                            <select class="form-select" id="combo" name="urgencia" required>
                                                <option selected>Seleccionar</option>
                                                <option value="Baja">
                                                    Baja
                                                </option>
                                                <option value="Media">
                                                    Media
                                                </option>
                                                <option value="Alta">
                                                    Alta
                                                </option>
                                                <option value="Altisima">
                                                    Altisima
                                                </option>
                                                <option value="La gente está muriéndose aqui!!">
                                                    La gente está muriéndose aqui!!
                                                </option>
                                            </select>
                                        </div>
                                        <p class="ps-1 formulario__input-error">Seleccione una opcion.</p>
                                    </div>
                                    <div class="mb-4 mt-4 formulario__grupo" id="grupo__textArea">
                                        <label for="mensaje" class="formulario__label fw-bold">Mensaje</label>
                                        <div class="formulario__grupo-input">
                                            <textarea class="form-control" placeholder="Escribe Aqui.." id="mensajeTarea" name="mensaje" maxlength="150"></textarea>
                                        </div>
                                        <p class="ps-1 mt-1 formulario__input-error">Max. 150 Caracteres.</p>
                                    </div>
                                    <div class="mb-4 mt-4 formulario__grupo" id="grupo__catcha">
                                        <label for="catchatext" class="formulario__label fw-bold">Captcha</label>
                                        <div class="formulario__grupo-input">
                                            <input type="text" class="formulario__input text-center" id="catcha" name="catcha" readonly>
                                            <h4 class="fs-5 pt-3 text-center" id="error_catcha"></h4>
                                            <input type="number" class="formulario__input mt-2" id="catchatext" name="catchatext">
                                        </div>
                                        <p class="ps-1 mt-1 formulario__input-error"></p>
                                    </div>
                                    <div class="formulario__mensaje" id="formulario1__mensaje">
                                        <p class="fw-bold"><i class="fas fa-exclamation-triangle"></i> Porfavor
                                            rellena
                                            los campos correctamente.</p>
                                    </div>
                                    <div class="formulario__grupo formulario__grupo-btn-enviar gap-3">
                                    <button type="button" id="btnf1limpiar" class="btn btn-secondary">Limpiar</button>
                                        <button type="button" id="btnForm1" class="btn btn-primary formulario__btn">Enviar</button>
                                        <p class="formulario__mensaje-exito pt-2 ps-2 fw-bold" id="formulario__mensaje-exito">¡Usuario dado de alta
                                            exitosamente!</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwoF">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoF" aria-expanded="false" aria-controls="collapseTwoF">
                            Formulario Numero 2
                        </button>
                    </h2>
                    <div id="collapseTwoF" class="accordion-collapse collapse" aria-labelledby="headingTwoF" data-bs-parent="#accordionForm">
                        <div class="accordion-body">
                            <div class="row">
                                <form method="POST" class="formulario2" id="formulario2" name="formulario" value="form2">
                                    <label class="fs-4 fw-bold">
                                        ¡Ingrese un tamaño para la caja!
                                    </label>
                                    <div class="mb-4 mt-4 formulario__grupo" id="grupo__tamanoh">
                                        <label for="Tamanoh" class="formulario__label fw-bold">Tamaño height(largo)</label>
                                        <div class="formulario__grupo-input">
                                            <input type="number" placeholder="Ingrese el height" class="formulario__input" id="tamanoh" name="tamanoh">
                                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                        </div>
                                    </div>
                                    <div class="mb-4 mt-4 formulario__grupo" id="grupo__tamanow">
                                        <label for="Tamanow" class="formulario__label fw-bold">Tamaño width(ancho)</label>
                                        <div class="formulario__grupo-input">
                                            <input type="number" placeholder="Ingrese el width" class="formulario__input" id="tamanow" name="tamanow">
                                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <button type="button" id="btnf2limpiar" class="btn mt-3 btn-secondary formulario__btn">Limpiar</button>
                                        <button type="button" id="btnForm2" class="btn mt-3 btn-primary formulario__btn">Enviar</button>
                                    </div>
                                    <p class="ps-1 mt-1 formulario__input-error"></p>
                            </div>
                            <div class="formulario__mensaje" id="formulario2__mensaje">
                                <p class="fw-bold"><i class="fas fa-exclamation-triangle"></i> Porfavor
                                    rellena
                                    todos los campos.</p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThreeF">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeF" aria-expanded="false" aria-controls="collapseThreeF">
                            Formulario Numero 3
                        </button>
                    </h2>
                    <div id="collapseThreeF" class="accordion-collapse collapse" aria-labelledby="headingThreeF" data-bs-parent="#accordionForm">
                        <div class="accordion-body">
                            <div class="row">
                                <form method="POST" class="formulario3" id="formulario3" name="formulario" value="form3">
                                    <label class="fs-4 fw-bold">
                                        ¡Escoge una fruta de tu gustos!
                                    </label>
                                    <div class="form-radio m-4">
                                        <input class="form-check-input" type="radio" name="frutas" value="Cereza" id="idCereza">
                                        <label class="form-check-label fw-bold" for="idCereza">
                                            Cereza
                                        </label>
                                    </div>
                                    <div class="form-radio m-4">
                                        <input class="form-check-input" type="radio" name="frutas" value="Fresa" id="idFresa">
                                        <label class="form-check-label fw-bold" for="idFresa">
                                            Fresa
                                        </label>
                                    </div>
                                    <div class="form-radio m-4">
                                        <input class="form-check-input" type="radio" name="frutas" value="Limon" id="idLimon">
                                        <label class="form-check-label fw-bold" for="idLimon">
                                            Limón
                                        </label>
                                    </div>
                                    <div class="form-radio m-4">
                                        <input class="form-check-input" type="radio" name="frutas" value="Manzana" id="idManzana">
                                        <label class="form-check-label fw-bold" for="idManzana">
                                            Manzana
                                        </label>
                                    </div>
                                    <div class="form-radio m-4">
                                        <input class="form-check-input" type="radio" name="frutas" value="Naranja" id="idNaranja">
                                        <label class="form-check-label fw-bold" for="idNaranja">
                                            Naranja
                                        </label>
                                    </div>
                                    <div class="form-radio m-4">
                                        <input class="form-check-input" type="radio" name="frutas" value="Pera" id="idPera">
                                        <label class="form-check-label fw-bold" for="idPera">
                                            Pera
                                        </label>
                                    </div>
                                    <div class="mt-3">
                                        <button type="button" id="btnf3limpiar" class="btn mt-3 btn-secondary">Limpiar</button>
                                        <button type="button" id="btnForm3" class="btn mt-3 btn-primary formulario__btn">Enviar</button>
                                    </div>
                                    <div class="formulario__mensaje" id="formulario3__mensaje">
                                        <p class="fw-bold"><i class="fas fa-exclamation-triangle"></i> ¡Porfavor
                                            selecciona una opcion!</p>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFourF">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourF" aria-expanded="false" aria-controls="collapseFourF">
                        Formulario Numero 4
                    </button>
                </h2>
                <div id="collapseFourF" class="accordion-collapse collapse" aria-labelledby="headingFourF" data-bs-parent="#accordionForm">
                    <div class="accordion-body">
                        <div class="row">
                            <form method="POST" class="formulario4" id="formulario4" name="formulario" value="form4">
                                <label class="fs-4 fw-bold">
                                    ¡Escoge una fruta de tu gustos!
                                </label>
                                <div class="form-radio m-4">
                                    <input class="form-check-input" type="radio" name="frutas" value="Cereza" id="idCerezaf4">
                                    <label class="form-check-label fw-bold" for="idCerezaf4">
                                        Cereza
                                    </label>
                                </div>
                                <div class="form-radio m-4">
                                    <input class="form-check-input" type="radio" name="frutas" value="Fresa" id="idFresaf4">
                                    <label class="form-check-label fw-bold" for="idFresaf4">
                                        Fresa
                                    </label>
                                </div>
                                <div class="form-radio m-4">
                                    <input class="form-check-input" type="radio" name="frutas" value="Limon" id="idLimonf4">
                                    <label class="form-check-label fw-bold" for="idLimonf4">
                                        Limón
                                    </label>
                                </div>
                                <div class="form-radio m-4">
                                    <input class="form-check-input" type="radio" name="frutas" value="Manzana" id="idManzanaf4">
                                    <label class="form-check-label fw-bold" for="idManzanaf4">
                                        Manzana
                                    </label>
                                </div>
                                <div class="form-radio m-4">
                                    <input class="form-check-input" type="radio" name="frutas" value="Naranja" id="idNaranjaf4">
                                    <label class="form-check-label fw-bold" for="idNaranjaf4">
                                        Naranja
                                    </label>
                                </div>
                                <div class="form-radio m-4">
                                    <input class="form-check-input" type="radio" name="frutas" value="Pera" id="idPeraf4">
                                    <label class="form-check-label fw-bold" for="idPeraf4">
                                        Pera
                                    </label>
                                </div>
                                <div class="mt-3">
                                    <button type="button" id="btnf4limpiar" class="btn mt-3 btn-secondary">Limpiar</button>
                                    <button type="button" id="btnForm4" class="btn mt-3 btn-primary formulario__btn">Enviar</button>
                                </div>
                                <div class="formulario__mensaje" id="formulario4__mensaje">
                                    <p class="fw-bold"><i class="fas fa-exclamation-triangle"></i> ¡Porfavor
                                        selecciona una opcion!</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFiveF">
                    <button class="accordion-button collapsed" id="btnf5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiveF" aria-expanded="false" aria-controls="collapseFiveF">
                        Formulario Numero 5
                    </button>
                </h2>
                <div id="collapseFiveF" class="accordion-collapse collapse" aria-labelledby="headingFiveF" data-bs-parent="#accordionForm">
                    <div class="accordion-body">
                        <div class="row">
                            <form method="POST" class="formulario5" id="formulario5" name="formulario" value="form5">
                                <div class="form-check d-flex flex-row gap-3 align-top">
                                    <input class="form-check-input" type="checkbox" name="color1" value="bgPag1" id="bgPag1">
                                    <div class="color1 dimColores"></div><label class="form-check-label fs-5 fw-bold" for="bgPag1">
                                        Color #1
                                    </label>
                                </div>
                                <div class="form-check d-flex flex-row gap-3 align-top">
                                    <input class="form-check-input" type="checkbox" name="color2" value="bgPag2" id="bgPag2">
                                    <div class="color2 dimColores"></div><label class="form-check-label  fs-5 fw-bold" for="bgPag2">
                                        Color #2
                                    </label>
                                </div>
                                <div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSixF">
                    <button class="accordion-button collapsed" id="btnf6" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixF" aria-expanded="false" aria-controls="collapseSixF">
                        Formulario Numero 6
                    </button>
                </h2>
                <div id="collapseSixF" class="accordion-collapse collapse" aria-labelledby="headingFiveF" data-bs-parent="#accordionForm">
                    <div class="accordion-body">
                        <div class="row">
                            <form method="POST" class="formulario6" id="formulario6" name="formulario" value="form6">
                                <div class="form-check d-flex flex-row gap-3 align-top">
                                    <input type="color" name="color1f6" class="form-control form-control-color" id="bg1f6" value="#000">
                                    <label class="form-check-label fs-5 fw-bold" for="bg1">
                                        Color (Fondo) #1
                                    </label>
                                </div>
                                <div class="form-check d-flex flex-row gap-3 align-top">
                                    <input type="color" name="color2f6" class="form-control form-control-color" id="bg2f6" value="#000">
                                    <label class="form-check-label fs-5 fw-bold" for="bg2">
                                        Color (Letra) #2
                                    </label>
                                </div>
                                <div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSvF">
                    <button class="accordion-button collapsed" id="btnf7" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSvF" aria-expanded="false" aria-controls="collapseSvF">
                        Formulario Numero 7
                    </button>
                </h2>
                <div id="collapseSvF" class="accordion-collapse collapse" aria-labelledby="headingSvF" data-bs-parent="#accordionForm">
                    <div class="accordion-body">
                        <div class="row">
                            <form method="POST" class="formulario7" id="formulario7" name="formulario" value="form7">

                                <div class="mb-4 mt-4 formulario__grupo" id="grupo__saldo">
                                    <label for="saldo" class="formulario__label fw-bold">Saldo</label>
                                    <div class="formulario__grupo-input">
                                        <input type="number" placeholder="Ingrese un nombre" class="formulario__input" id="saldo" name="saldo">
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                    <p class="ps-1 mt-1 formulario__input-error fw-bold">*Ingrese su saldo</p>

                                    <input class="form-check-input" type="checkbox" name="saldoconyuge" value="" id="saldoconyugecheck">
                                    <label class="form-check-label  fw-bold" for="saldoconyugecheck">
                                        Saldo Conyuge
                                    </label>

                                    <div class="formulario__grupo-input d-none mt-3" id="inputf7">
                                        <input type="number" placeholder="Ingrese el saldo de su conyuge" class="formulario__input" id="saldoconyuge" name="saldoconyuge">
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                    </div>
                                </div>


                                <div class="formulario__mensaje" id="formulario7__mensaje">
                                    <p class="fw-bold"><i class="fas fa-exclamation-triangle"></i> Porfavor
                                        rellena
                                        los campos correctamente.</p>
                                </div>
                                <div class="formulario__mensaje" id="formulario7f__mensaje">
                                    <p class="fw-bold"><i class="fas fa-exclamation-triangle"></i>Ingresa un monto correcto.</p>
                                </div>
                                <div class="formulario__grupo formulario__grupo-btn-enviar">
                                    <button type="button" id="btnf7limpiar" class="btn btn-secondary">Limpiar</button>

                                    <button type="button" id="btnForm7" class="btn ms-5 btn-primary formulario__btn">Enviar</button>

                                </div>



                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingHgF">
                    <button class="accordion-button collapsed" id="btnf8" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHgF" aria-expanded="false" aria-controls="collapseHgF">
                        Formulario Numero 8
                    </button>
                </h2>
                <div id="collapseHgF" class="accordion-collapse collapse" aria-labelledby="headingHgF" data-bs-parent="#accordionForm">
                    <div class="accordion-body">
                        <div class="row">
                        <form method="POST" class="formulario8" id="formulario8" name="formulario" value="form8">
                                    <label class="fs-4 fw-bold">
                                        ¡Ingrese los limites!
                                    </label>
                                    <div class="mb-4 mt-4 formulario__grupo" id="grupo__superior">
                                        <label for="lSuperior" class="formulario__label fw-bold">Limite Inferior</label>
                                        <div class="formulario__grupo-input">
                                            <input type="number" placeholder="Ingrese el limite superior" class="formulario__input" id="lSuperior" name="lSuperior">
                                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                        </div>
                                    </div>
                                    <div class="mb-4 mt-4 formulario__grupo" id="grupo__inferior">
                                        <label for="lInferior" class="formulario__label fw-bold">Limite Superior</label>
                                        <div class="formulario__grupo-input">
                                            <input type="number" placeholder="Ingrese el limite Inferior" class="formulario__input" id="lInferior" name="lInferior">
                                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <button type="button" id="btnf8limpiar" class="btn mt-3 btn-secondary formulario__btn">Limpiar</button>
                                        <button type="button" id="btnForm8" class="btn mt-3 btn-primary formulario__btn">Enviar</button>
                                    </div>
                                    <p class="ps-1 mt-1 formulario__input-error"></p>
                            </div>
                            <div class="formulario__mensaje" id="formulario8__mensaje">
                                <p class="fw-bold"><i class="fas fa-exclamation-triangle"></i> Porfavor
                                    rellena
                                    todos los campos.</p>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col pt-4 mt-5">
        <div class="card">
            <div class="card-header" style="background-color: #e9e9e9;">
                <h2 class="fw-bold fs-3 text-center"> Area de resultados</h2>
            </div>
            <div class="box text-center" id="box"></div>
            <div class="card-body" id="card-body">
                <div class="resf1">
                    <h2 id="nombreform" class="fs-5 fw-bold"></h2>
                    <p class="fs-5 fw-bold" id="correoform"></p>
                    <p class="fs-5 fw-bold" id="telform"></p>
                    <p class="fs-5 fw-bold" id="urgform"></p>
                    <p class="fs-5 fw-bold text-center" id="msjform"></p>
                </div>
                <div class="resf7">
                    <h2 id="titulodescf7" class="fs-4 fw-bold text-center"></h2>
                    <p class="fs-5 fw-bold" id="obrasSocial"></p>
                    <p class="fs-5 fw-bold" id="CuotaSindical"></p>
                    <p class="fs-5 fw-bold" id="SeguroSepelio"></p>
                    <p class="fs-5 fw-bold" id="ConveniosColectivos"></p>
                    <p class="fs-5 fw-bold" id="ganancias"></p>

                    <h3 class="fs-4 fw-bold" id="saldoSD"></h3>
                    <p class="fs-4 fw-bold text-center" id="saldoNT"></p>
                </div>
                <div class="resf7CY">
                    <h2 id="titulodescf7CY" class="fs-4 fw-bold text-center"></h2>
                    <p class="fs-5 fw-bold" id="obrasSocialCY"></p>
                    <p class="fs-5 fw-bold" id="CuotaSindicalCY"></p>
                    <p class="fs-5 fw-bold" id="SeguroSepelioCY"></p>
                    <p class="fs-5 fw-bold" id="ConveniosColectivosCY"></p>
                    <p class="fs-5 fw-bold" id="gananciasCY"></p>
                    <h3 class="fs-4 fw-bold" id="saldoSDCY"></h3>
                    <p class="fs-4 fw-bold text-center" id="saldoNTCY"></p>
                </div>
                <div class="text-center" id="textCl">

                </div>
                <div class="text-center" id="matriz">

                </div>
                <div class="text-center">
                    <img class="imgFav text-center" id="frutasSelect" src=" " alt="">
                </div>
            </div>
        </div>
    </div>


</div>

<?php require('./layout/modales/modales.php') ?>
<?php require('./footer.php') ?>