$(document).ready(function () {
  Tabla = $("#tabla_User")
    .dataTable({
      pageLength: 5,
      language: {
        url: "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json",
      },
    })
    .DataTable();
});

const inputs = document.querySelectorAll("#formulario input");
var id = 5;
const expresiones = {
  usuario: /^[a-zA-Z0-9\_\-]{4,9}$/, // Letras, numeros, guion y guion_bajo
  password: /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/, // 8 a 16 digitos min y may 1 caracter especial.
  correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
};

const campos = {
  usuario: false,
  password: false,
  correo: false,
};

const validarFormulario = (e) => {
  switch (e.target.name) {
    case "usuario":
      validarCampo(expresiones.usuario, e.target, "usuario");
      break;
    case "password":
      validarCampo(expresiones.password, e.target, "password");
      break;
    case "correo":
      validarCampo(expresiones.correo, e.target, "correo");
      break;
  }
};

const validarCampo = (expresion, input, campo) => {
  if (expresion.test(input.value)) {
    $(`#grupo__${campo} i`).removeClass("circleAnimationback");
    // document.querySelector(`#grupo__${campo} i`).classList.remove('circleAnimationback');
    $(`#grupo__${campo} i`).addClass("circleAnimation");
    //document.querySelector(`#grupo__${campo} i`).classList.add('circleAnimation');
    $(`#grupo__${campo}`).removeClass("formulario__grupo-incorrecto");
    //document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');

    $(`#grupo__${campo} i`).addClass("fa-check-circle");
    //document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');

    $(`#grupo__${campo} i`).removeClass("fa-times-circle");
    //document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');

    $(`#grupo__${campo}`).addClass("formulario__grupo-correcto");
    //document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');

    $(`#grupo__${campo} .formulario__input-error`).removeClass(
      "formulario__input-error-activo"
    );
    //document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
    campos[campo] = true;
  } else {
    $(`#grupo__${campo} i`).removeClass("circleAnimation");
    //document.querySelector(`#grupo__${campo} i`).classList.remove('circleAnimation');

    $(`#grupo__${campo} i`).addClass("circleAnimationback");
    //document.querySelector(`#grupo__${campo} i`).classList.add('circleAnimationback');

    $(`#grupo__${campo}`).addClass("formulario__grupo-incorrecto");
    //document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');

    $(`#grupo__${campo}`).removeClass("formulario__grupo-correcto");
    //document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');

    $(`#grupo__${campo} i`).addClass("fa-times-circle");
    //document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');

    $(`#grupo__${campo} i`).removeClass("fa-check-circle");
    //document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');

    $(`#grupo__${campo} .formulario__input-error`).addClass(
      "formulario__input-error-activo"
    );
    //document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
    campos[campo] = false;
  }
};

inputs.forEach((input) => {
  input.addEventListener("keyup", validarFormulario);
  input.addEventListener("blur", validarFormulario);
});

$("#formulario").submit((e) => {
  e.preventDefault();

  if (campos.usuario && campos.password && campos.correo) {
    document
      .getElementById("formulario__mensaje-exito")
      .classList.add("formulario__mensaje-exito-activo");
    setTimeout(() => {
      document
        .getElementById("formulario__mensaje-exito")
        .classList.remove("formulario__mensaje-exito-activo");
    }, 3000);

    document
      .querySelectorAll(".formulario__grupo-correcto")
      .forEach((icono) => {
        icono.classList.remove("formulario__grupo-correcto");
      });
    campos.usuario = false;
    campos.password = false;
    campos.correo = false;
    formulario.reset();
  } else {
    document
      .getElementById("formulario__mensaje")
      .classList.add("formulario__mensaje-activo");
    setTimeout(() => {
      document
        .getElementById("formulario__mensaje")
        .classList.remove("formulario__mensaje-activo");
    }, 5000);
  }
});

/* OBTENER FECHA Y HORA ACTUAL 
var hoy = new Date()
var fecha = hoy.getFullYear() + '-' + ('0' + (hoy.getMonth() + 1)).slice(-2) + '-' + ('0' + hoy.getDate()).slice(-2);
var hora = ('0' + hoy.getHours()).slice(-2) + ':' + ('0' + hoy.getMinutes()).slice(-2);
var fecha_hora = fecha + 'T' + hora;
$("#fecha").val(fecha_hora);
*/

/*HACER GIRAR LA IMAGEN DE ALTA USUARIO */
$("#add-user-img").click((e) => {
  $("#add-user-img").addClass("circleAnimation");
  setTimeout(() => {
    $("#add-user-img").removeClass("circleAnimation");
  }, 500);
});

/*CARGAR USUARIOS A LA TABLA*/
let url = "https://randomuser.me/api/?results=5";
fetch(url)
  .then((response) => response.json())
  .then((data) => mostrarData(data))
  .catch((error) => console.log(error));

let Tabla;
const mostrarData = (data) => {
  // let body = ""
  for (var i = 0; i < data.results.length; i++) {
    Tabla.row
      .add([
        i + 1,
        data.results[i].name.first,
        data.results[i].email,
        data.results[i].dob.date,

        ` <img class="rounded shadow" width="75" height="75"src="${data.results[i].picture.large}" alt="fotoUser">`,

        `
           <button id="btnBorrar1" class="btn btn-action"data-bs-toggle="modal" data-bs-id="${i}" data-bs-target="#eliminarModal">
               <i class="icon ion-md-trash"></i></button>
               
            <button id="btnEdit" class="btn btn-action"data-bs-toggle="modal" data-bs-id="${i}" data-bs-target="#editarModal">
               <i class="icon ion-md-create"></i></button>`,
      ])
      .draw();

    /*   body += `<tr>
           <td class="pt-3 fw-bold text-center">${i + 1}</td>
           <td id="td-nombre-${i + 1}" class="pt-3 text-center">${data.results[i].name.first}</td>
           <td id="td-correo" class="pt-3 text-center">${data.results[i].email}</td>
           <td id="td-f_reg" class="pt-3 text-center">${data.results[i].registered.date}</td>
           <td class="text-center">
           <img class="rounded shadow" width="75" height="75"src="${data.results[i].picture.large}" alt="fotoUser"
           </td>
           <td class="text-center">
               <button id="btnBorrar1" class="btn btn-action"data-bs-toggle="modal" data-bs-id="${i}" data-bs-target="#eliminarModal">
                   <i class="icon ion-md-trash"></i></button>
               <button id="btnEdit" class="btn btn-action" data-bs-toggle="modal"  data-bs-id="${i}"data-bs-target="#editarModal">
                   <i class="icon ion-md-create"></i></button>
           </td>
           </tr>`
     
       $('#data').html(body)*/
  }
};

/*AGREGAR UN NUEVO USUARIO*/
$("#btn-agregar").click((e) => {
  imgMd = "";

  let UrlimgModal = "https://randomuser.me/api/?results=3";
  fetch(UrlimgModal)
    .then((response) => response.json())
    .then((datos) => NuevoUser(datos))
    .catch((error) => console.log(error));

  const NuevoUser = (datos) => {
    let imgag = "";
    for (var i = 0; i < datos.results.length; i++) {
      imgag += `<img id="img__${i}" class="m-1 imgag shadow rounded" src="${datos.results[i].picture.large}" alt="fotoUser">`;

      var nombre = datos.results[i].name.first;
      var correo = datos.results[i].email;
      var fechareg = datos.results[i].registered.date;
    }
    /* CARGAR DATOS AL MODAL DE AGREGAR REGISTROS*/
    $("#ag__nombre").val(nombre);
    $("#ag__correo").val(correo);
    $("#fecharreg").val(fechareg);
    /*************************************/

    $("#imgModal").html(imgag);

    $("#img__0").click((e) => {
      imgMd = 0;
      $("#img__0").addClass("imgag-select");
      $("#img__1").removeClass("imgag-select");
      $("#img__2").removeClass("imgag-select");
    });
    $("#img__1").click((e) => {
      imgMd = 1;
      $("#img__1").addClass("imgag-select");
      $("#img__2").removeClass("imgag-select");
      $("#img__0").removeClass("imgag-select");
    });
    $("#img__2").click((e) => {
      imgMd = 2;
      $("#img__2").addClass("imgag-select");
      $("#img__0").removeClass("imgag-select");
      $("#img__1").removeClass("imgag-select");
    });
  };
});




$("#btn_ag_user_modal").click((e) => {
  if (
    $(`#img__${imgMd}`).attr("src") == "" ||
    $(`#img__${imgMd}`).attr("src") == undefined ||
    $("#ag__nombre").val() == "" ||
    $("#ag__correo").val() == ""
  ) {
    $("#modal__mensaje").addClass("modal__mensaje-activo");
    setTimeout(() => {
      $("#modal__mensaje").removeClass("modal__mensaje-activo");
    }, 3000);
  } else {
    Tabla.row
      .add([
        id + 1,
        $("#ag__nombre").val(),
        $("#ag__correo").val(),
        $("#fecharreg").val(),

        ` <img class="rounded shadow" width="75" height="75"src="${$(
          `#img__${imgMd}`
        ).attr("src")}" alt="fotoUser">`,

        `
           <button id="btnBorrar1" class="btn btn-action"data-bs-toggle="modal" data-bs-id="${
             id + 1
           }" data-bs-target="#eliminarModal">
               <i class="icon ion-md-trash"></i></button>
               
            <button id="btnEdit" class="btn btn-action"data-bs-toggle="modal" data-bs-id="${
              id + 1
            }" data-bs-target="#editarModal">
               <i class="icon ion-md-create"></i></button>`,
      ])
      .draw();

    /* add_user += `<tr>
         <td class="pt-3 fw-bold text-center">${id + 1}</td>
         <td class="pt-3 text-center">${$('#ag__nombre').val()}</td>
         <td class="pt-3 text-center">${$('#ag__correo').val()}</td>
         <td class="pt-3 text-center">${$('#fecharreg').val()}</td>
         <td class="text-center"><img class="rounded shadow" width="75" height="75"src="${$(`#img__${imgMd}`).attr("src")}" alt="fotoUser"></td>
         <td class="text-center">
         <button id="btnBorrar1" class="btn btn-action"data-bs-toggle="modal" data-bs-id="${id + 1}" data-bs-target="#eliminarModal">
             <i class="icon ion-md-trash"></i></button>
         <button id="btnEdit" class="btn btn-action" data-bs-toggle="modal"  data-bs-id="${id + 1}"data-bs-target="#editarModal">
             <i class="icon ion-md-create"></i></button>
        </td>
        </tr>`*/

    // $('#data').append(add_user);
    document.getElementById("form_User_modal").reset();
    id++;
    $("#modalRegistro").modal("hide");
    $("#img__0").removeClass("imgag-select");
    $("#img__1").removeClass("imgag-select");
    $("#img__2").removeClass("imgag-select");
    Swal.fire({
      title: "¡Usuario agregado!",
      icon: "success",
      showConfirmButton: false,
      timer: 1000,
    });
  }
});
/*ELIMINAR USUARIO DE LA TABLA */
$("#data").on("click", "#btnBorrar1", function (e) {
  var ob_fila_br = e.target.parentNode.parentNode;

  $("#btnBorrar").on("click", function (e) {
    // ob_fila_br.remove();
    Tabla.row(ob_fila_br).remove().draw();
    $("#eliminarModal").modal("hide");
    Swal.fire({
      title: "¡Usuario eliminado!",
      icon: "success",
      showConfirmButton: false,
      timer: 1000,
    });
  });
});

/*EDITAR USUARIO DE LA TABLA */
$("#data").on("click", "#btnEdit", function (e) {
  var ob_fila = e.target.parentNode.parentNode;
  var celdas = ob_fila.getElementsByTagName("TD");

  edit_nombre = celdas.item(1);
  edit_correo = celdas.item(2);
  edit_fechareg = celdas.item(3);

  $("#edit_nombre").val(celdas.item(1).innerText);
  $("#edit_correo").val(celdas.item(2).innerText);
  $("#edit_fechaReg").val(celdas.item(3).innerText);

  $("#btn_editar_user").on("click", function (e) {
    if (
      $("#edit_nombre").val() == "" ||
      $("#edit_correo").val() == "" ||
      $("#edit_fechaReg").val() == ""
    ) {
      $("#formulario__mensaje_EDITAR").addClass("formulario__mensaje-activo");
      setTimeout(() => {
        $("#formulario__mensaje_EDITAR").removeClass(
          "formulario__mensaje-activo"
        );
      }, 2000);
    } else {
      edit_nombre.innerText = $("#edit_nombre").val();
      edit_correo.innerText = $("#edit_correo").val();
      edit_fechareg.innerText = $("#edit_fechaReg").val();



      Swal.fire({
        title: "¡Usuario editado!!",
        icon: "success",
        showConfirmButton: false,
        timer: 1000,
      });
      $("#editarModal").modal("hide");
    }
  });
});

/* FORMULARIOS */
$("#btnf1limpiar").on("click", function (e) {
  $("#formulario1")[0].reset();
  var myCatcha = Math.floor(Math.random() * 3945454) + 7945654;
  $("#catcha").val(myCatcha);
  limpiarareadedatos();
});

$("#btnForm1").on("click", function (e) {
  let datos = $("#formulario1").serialize();
  $.ajax({
    url: "../php/validaciones/validacionesF1.php",
    dataType: "Json",
    type: "POST",
    data: datos,
    success: function (data) {
      if (data.resultado == "OK") {
        limpiarareadedatos();
        nombreForm = "Nombre : " + data.name;
        correoForm = "Correo : " + data.correo;
        telForm = "Telefono : " + data.telefono;
        urgenciaForm = "Urgencia : " + data.urgencia;
        msjForm = "Mensaje : " + data.mensajeForm;
        $("#nombreform").html(nombreForm);
        $("#correoform").html(correoForm);
        $("#telform").html(telForm);
        $("#urgform").html(urgenciaForm);
        $("#msjform").html(msjForm);

        $("#error_catcha").html("");
        $(`#grupo__textArea`).removeClass("formulario__grupo-incorrecto");
        $(`#grupo__select`).removeClass("formulario__grupo-incorrecto");
        $(`#grupo__nombre`).removeClass("formulario__grupo-correcto");
        $(`#grupo__correoForm`).removeClass("formulario__grupo-correcto");
        $("#formulario1")[0].reset();

        var myCatcha = Math.floor(Math.random() * 3945454) + 7945654;
        $("#catcha").val(myCatcha);
      } else {
        if (data.mensajeNombre == "NOOK") {
          //      alert("el nombre esta mal")
          $(`#grupo__nombre`).addClass("formulario__grupo-incorrecto");
        } else {
          $(`#grupo__nombre`).removeClass("formulario__grupo-correcto");
        }
        if (data.mensajeCorreo == "NOOK") {
          //     alert("el correo esta mal")

          $(`#grupo__correoForm`).addClass("formulario__grupo-incorrecto");
        } else {
          $(`#grupo__correoForm`).removeClass("formulario__grupo-correcto");
        }
        if (data.mensajeMsj == "NOOK") {
          //  alert("el mensaje esta mal")
          $(`#grupo__textArea`).addClass("formulario__grupo-incorrecto");
        } else {
          $(`#grupo__textArea`).removeClass("formulario__grupo-incorrecto");
        }
        if (data.mensajeUrgencia == "NOOK") {
          //      alert("el urgencia esta mal")
          $(`#grupo__select`).addClass("formulario__grupo-incorrecto");
        } else {
          $(`#grupo__select`).removeClass("formulario__grupo-incorrecto");
        }
        if (data.verCatcha == "NOOK") {
          $("#error_catcha").html("El catcha Introducido no coincide");
        } else {
          $("#error_catcha").html("");
        }
        document
          .getElementById("formulario1__mensaje")
          .classList.add("formulario__mensaje-activo");
        setTimeout(() => {
          document
            .getElementById("formulario1__mensaje")
            .classList.remove("formulario__mensaje-activo");
        }, 5000);
        var myCatcha = Math.floor(Math.random() * 3945454) + 7945654;
        $("#catcha").val(myCatcha);
      }
    },
  });
});

const expresionesForm1 = {
  nombre: /^(?=.{10,35}$)[a-zñA-ZÑ]*$/,

  correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
};

const validarFormulario1 = (e) => {
  switch (e.target.name) {
    case "nombre":
      validarCampo(expresionesForm1.nombre, e.target, "nombre");
      break;
    case "correoForm":
      validarCampo(expresionesForm1.correo, e.target, "correoForm");
      break;
  }
};

const inputsForm1 = document.querySelectorAll("#formulario1 input");
inputsForm1.forEach((input) => {
  input.addEventListener("keyup", validarFormulario1);
  input.addEventListener("blur", validarFormulario1);
});

var myCatcha = Math.floor(Math.random() * 3945454) + 7945654;
$("#catcha").val(myCatcha);

const limpiarareadedatos = () => {
  $("#nombreform").html("");
  $("#correoform").html("");
  $("#telform").html("");
  $("#urgform").html("");
  $("#msjform").html("");
  $("#textof5").html("");
  $("#card-body").removeClass("color1");
  $("#card-body").removeClass("color2");
  $("#textof5").removeClass("color1text");
  $("#textof5").removeClass("color2text");
  $("#card-body").addClass("colorDEF");
  $("#box").css({
    width: `0px`,
    height: `0px`,
  });
  $("#frutasSelect").attr("src", "");
  $("#matriz").html("");

  /**form 7 */
  $("#titulodescf7").html("");
  $("#obrasSocial").html("");
  $("#CuotaSindical").html("");
  $("#SeguroSepelio").html("");
  $("#ConveniosColectivos").html("");
  $("#ganancias").html("");
  $("#saldoSD").html("");
  $("#saldoNT").html("");

  $("#titulodescf7CY").html("");
  $("#obrasSocialCY").html("");
  $("#CuotaSindicalCY").html("");
  $("#SeguroSepelioCY").html("");
  $("#ConveniosColectivosCY").html("");
  $("#gananciasCY").html("");
  $("#saldoSDCY").html("");
  $("#saldoNTCY").html("");
  $("#inputf7").removeClass("inputf7");
};

/* FORMULARIO 2 */

$("#btnForm2").on("click", function (e) {
  let datosf2 = $("#formulario2").serialize();
  $.ajax({
    url: "../php/validaciones/validacionesF2.php",
    dataType: "Json",
    type: "POST",
    data: datosf2,
    success: function (data) {
      if (data.resultado == "OK") {
        limpiarareadedatos();
        let h = $("#tamanoh").val();
        let w = $("#tamanow").val();
        $(`#grupo__tamanoh`).removeClass("formulario__grupo-incorrecto");
        $(`#grupo__tamanow`).removeClass("formulario__grupo-incorrecto");

        $("#box").css({
          width: `${w}px`,
          height: `${h}px`,
        });
        $("#box").css("background-color", "#180a70");
      } else {
        if (data.rtamanoh == "NOOK") {
          $(`#grupo__tamanoh`).addClass("formulario__grupo-incorrecto");
        } else {
          $(`#grupo__tamanoh`).removeClass("formulario__grupo-incorrecto");
        }
        if (data.rtamanow == "NOOK") {
          $(`#grupo__tamanow`).addClass("formulario__grupo-incorrecto");
        } else {
          $(`#grupo__tamanow`).removeClass("formulario__grupo-incorrecto");
        }
        document
          .getElementById("formulario2__mensaje")
          .classList.add("formulario__mensaje-activo");
        setTimeout(() => {
          document
            .getElementById("formulario2__mensaje")
            .classList.remove("formulario__mensaje-activo");
        }, 5000);
      }
    },
  });
});

$("#btnf2limpiar").on("click", function (e) {
  $("#box").css({
    width: `0px`,
    height: `0px`,
  });

  $("#formulario2")[0].reset();
});

/*FORMULARIO 3 */

$("#btnForm3").on("click", function (e) {
  let datosf3 = $("#formulario3").serialize();
  $.ajax({
    url: "../php/validaciones/validacionesF3.php",
    dataType: "Json",
    type: "POST",
    data: datosf3,
    success: function (data) {
      if (data.resultado == "OK") {
        limpiarareadedatos();
        $("#msjform").html("Tu fruta favorita es : " + data.frutasselect);
        $("#formulario3")[0].reset();
      } else {
        if (data.resultado == "NOOK") {
          document
            .getElementById("formulario3__mensaje")
            .classList.add("formulario__mensaje-activo");
          setTimeout(() => {
            document
              .getElementById("formulario3__mensaje")
              .classList.remove("formulario__mensaje-activo");
          }, 5000);
        }
      }
    },
  });
});

$("#btnf3limpiar").on("click", function (e) {
  $("#formulario3")[0].reset();
  limpiarareadedatos();
});

$("#btnf4limpiar").on("click", function (e) {
  $("#formulario4")[0].reset();
  limpiarareadedatos();
});

//*FORMULARIO 4 */
$("#btnForm4").on("click", function (e) {
  let datosf4 = $("#formulario4").serialize();
  $.ajax({
    url: "../php/validaciones/validacionesF4.php",
    dataType: "Json",
    type: "POST",
    data: datosf4,
    success: function (data) {
      if (data.resultado == "OK") {
        limpiarareadedatos();
        $("#formulario4")[0].reset();
        $("#msjform").html("Tu fruta favorita es : " + data.frutasselect);
        $("#frutasSelect").attr("src", data.frutasselectIMG);
      } else {
        if (data.resultado == "NOOK") {
          document
            .getElementById("formulario4__mensaje")
            .classList.add("formulario__mensaje-activo");
          setTimeout(() => {
            document
              .getElementById("formulario4__mensaje")
              .classList.remove("formulario__mensaje-activo");
          }, 5000);
        }
      }
    },
  });
});

//*FORMULARIO 5 */
$("#bgPag1").change(function (e) {
  limpiarareadedatospf5();
  let pag = "1";
  verificarColor(pag);
});
$("#bgPag2").change(function (e) {
  limpiarareadedatospf5();
  let pag = "2";
  verificarColor(pag);
});

const limpiarareadedatospf5 = () => {
  $("#nombreform").html("");
  $("#correoform").html("");
  $("#telform").html("");
  $("#urgform").html("");
  $("#msjform").html("");
  $("#box").css({
    width: `0px`,
    height: `0px`,
  });

  $("#frutasSelect").attr("src", "");
};
const verificarColor = (pag) => {
  let datosf5 = $("#formulario5").serialize();
  $.ajax({
    url: "../php/validaciones/validacionesF5.php",
    dataType: "Json",
    type: "POST",
    data: datosf5,
    success: function (data) {
      let p = ` <p id="textof5" class="fs-5 fw-bold text-center">
            “Aliquam suscipit lacinia ultricies. Aenean maximus luctus arcu, non suscipit elit lacinia a. Vestibulum quis commodo anto"
                        </p>`;
      $("#textCl").html(p);

      if (data.resultadoC2 == "OK" && data.resultadoC1 == "NOOK") {
        $("#card-body").removeClass("color1");
        $("#card-body").addClass("color2");
      }
      if (data.resultadoC1 == "OK" && data.resultadoC2 == "NOOK") {
        $("#card-body").removeClass("color2");
        $("#card-body").addClass("color1");
      }
      if (data.resultadoC2 == "NOOK" && data.resultadoC1 == "NOOK") {
        $("#card-body").removeClass("color1");
        $("#card-body").removeClass("color2");
        $("#textof5").removeClass("color1text");
        $("#textof5").removeClass("color2text");
      }
      if (data.resultadoC2 == "OK" && data.resultadoC1 == "OK") {
        if (pag == "1") {
          $("#textof5").addClass("color1text");
        }
        if (pag == "2") {
          $("#textof5").addClass("color2text");
        }
      }
    },
  });
};
$("#btnf5").on("click", () => {
  limpiarareadedatos();
  $("#formulario5")[0].reset();
  $("#card-body").removeClass("colorDEF");
  $("#card-body").css("background-color", `#fff`);
});

/*FORMULARIO 6 */
$("#btnf6").on("click", () => {
  limpiarareadedatos();
  $("#card-body").removeClass("colorDEF");
});

$("#bg1f6").change(function (e) {
  verificarColorF6();
  limpiarareadedatospf5();
});
$("#bg2f6").change(function (e) {
  limpiarareadedatospf5();
  verificarColorF6();
});

const verificarColorF6 = () => {
  let datosf6 = $("#formulario6").serialize();
  $.ajax({
    url: "../php/validaciones/validacionesF6.php",
    dataType: "Json",
    type: "POST",
    data: datosf6,
    success: function (data) {
      let p = ` <p id="textof5" class="fs-5 fw-bold text-center">
            “Aliquam suscipit lacinia ultricies. Aenean maximus luctus arcu, non suscipit elit lacinia a. Vestibulum quis commodo anto"
                        </p>`;
      $("#textCl").html(p);

      if (data.resultadoC1 == "OK") {
        $("#card-body").css("background-color", `${data.resultadoColor}`);
      }
      if (data.resultadoC2 == "OK") {
        $("#textof5").css("color", `${data.resultadoColor2}`);
      }
    },
  });
};

/*FORMULARIO 7 */

$("#btnf7limpiar").on("click", function (e) {
  $("#formulario7")[0].reset();
  limpiarareadedatos();
});

$("#btnf7").on("click", () => {
  $("#card-body").removeClass("colorDEF");
  limpiarareadedatos();
  $("#formulario7")[0].reset();
});

$("#saldoconyugecheck").change(function (e) {
  if ($("#saldoconyugecheck").prop("checked")) {
    $("#inputf7").addClass("inputf7");
  } else {
    $("#inputf7").removeClass("inputf7");
    $("#formulario7")[0].reset();
  }
});

$("#btnForm7").on("click", function (e) {
  let datosf7 = $("#formulario7").serialize();
  if($("#saldo").val() > 0){
    $.ajax({
        url: "../php/validaciones/validacionesF7.php",
        dataType: "Json",
        type: "POST",
        data: datosf7,
        success: function (data) {
          if (data.resultado == "OK") {
          
            titulodescf7 = "Los descuentos aplicados son los siguientes:";
            let numero = data.desO_S;
            obrasSocial = "Obra Social 6% : $" + data.desO_S.toFixed(2);
            CuotaSindical = "Cuota Sindical 2,5% : $" + data.desC_S.toFixed(2);
            SeguroSepelio = "Seguro de Sepelio 1,5% : $" + data.desS_S.toFixed(2);
            ConveniosColectivos =
              "Convenios Colectivos 2% : $" + data.desC_C.toFixed(2);
            saldoPr = "El saldo cobrado es : $" + data.saldo;
            saldoNt =
              "El saldo neto con desc. aplicados es : $" +
              data.saldoneto.toFixed(2);
            if (data.desG == "NOOK") {
              ganancias = "Sin descuento a las ganancias.";
            } else {
              ganancias = "Ganancias Mayores a 50mil 15% : " + data.desG.toFixed(2);
            }
    
            $("#titulodescf7").html(titulodescf7);
            $("#obrasSocial").html(obrasSocial);
            $("#CuotaSindical").html(CuotaSindical);
            $("#SeguroSepelio").html(SeguroSepelio);
            $("#ConveniosColectivos").html(ConveniosColectivos);
            $("#ganancias").html(ganancias);
            $("#saldoSD").html(saldoPr);
            $("#saldoNT").html(saldoNt);
            if ($("#saldoconyugecheck").prop("checked")) {
                if($("#saldoconyuge").val() > 0){
                    if (data.resultadoCY == "OK") {
                        titulodescf7CY =
                          "Los descuentos aplicados al conyugue son los siguientes:";
                        obrasSocialCY = "Obra Social 6% : $" + data.desO_SCY.toFixed(2);
                        CuotaSindicalCY =
                          "Cuota Sindical 2,5% : $" + data.desC_SCY.toFixed(2);
                        SeguroSepelioCY =
                          "Seguro de Sepelio 1,5% : $" + data.desS_SCY.toFixed(2);
                        ConveniosColectivosCY =
                          "Convenios Colectivos 2% : $" + data.desC_CCY.toFixed(2);
                        saldoPrCY = "El saldo cobrado es : $" + data.saldocy;
                        saldoNtCY =
                          "El saldo neto con desc. aplicados es : $" +
                          data.saldonetocy.toFixed(2);
              
                        if (data.desGCY == "NOOK") {
                          gananciascy = "Sin descuento a las ganancias.";
                        } else {
                          gananciascy =
                            "Ganancias Mayores a 50mil 15% : " + data.desGCY.toFixed(2);
                        }
              
                        $("#titulodescf7CY").html(titulodescf7CY);
                        $("#obrasSocialCY").html(obrasSocialCY);
                        $("#CuotaSindicalCY").html(CuotaSindicalCY);
                        $("#SeguroSepelioCY").html(SeguroSepelioCY);
                        $("#ConveniosColectivosCY").html(ConveniosColectivosCY);
                        $("#gananciasCY").html(gananciascy);
                        $("#saldoSDCY").html(saldoPrCY);
                        $("#saldoNTCY").html(saldoNtCY);
                      } 
                }else {
                document
                .getElementById("formulario7f__mensaje")
                .classList.add("formulario__mensaje-activo");
                setTimeout(() => {
                document
                  .getElementById("formulario7f__mensaje")
                  .classList.remove("formulario__mensaje-activo");
              }, 5000);
            }
            }
           
          } else {
            document
              .getElementById("formulario7__mensaje")
              .classList.add("formulario__mensaje-activo");
            setTimeout(() => {
              document
                .getElementById("formulario7__mensaje")
                .classList.remove("formulario__mensaje-activo");
            }, 5000);
          }
        },
      });
  }else {
    document
    .getElementById("formulario7f__mensaje")
    .classList.add("formulario__mensaje-activo");
  setTimeout(() => {
    document
      .getElementById("formulario7f__mensaje")
      .classList.remove("formulario__mensaje-activo");
  }, 5000);

  }
 
});
$("#btnf8limpiar").on("click", function (e) {
  $("#formulario8")[0].reset();
  limpiarareadedatos();
});

$("#btnForm8").on("click", function (e) {
  let datosf8 = $("#formulario8").serialize();
  $.ajax({
    url: "../php/validaciones/validacionesF8.php",
    dataType: "Json",
    type: "POST",
    data: datosf8,
    success: function (data) {
      if (data.resultado == "OK") {
        $("#matriz").html(data.html);
      }
    },
  });
});

$("#btnf8").on("click", () => {
    $("#card-body").removeClass("colorDEF");
    limpiarareadedatos();
    $("#formulario7")[0].reset();
  });
  