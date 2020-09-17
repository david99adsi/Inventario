const RUTA_URL = "http://localhost/inventarioIN/Usuario/";
var listarusuario = function () {
  var tabla = $("#mitabla").DataTable({
    "scrollX": true,
    ajax: {
      url: RUTA_URL + "llenarUsuario",
      dataSrc: "",
    },
    columns: [
      {
        defaultContent:
          "<button type='button' class ='editar btn btn-outline-success' data-toggle='tooltip' data-placement='top' title='Edita usuario'><i class='icon-edit-sign'></i></button>",
      },
      {
        defaultContent:
          "<button type='button' class ='eliminar btn btn-outline-success' data-toggle='tooltip' data-placement='top' title='Elimina usuario'><i class='icon-trash'></i></button>",
      },
      {
        data: "id",
      },
      {
        data: "cedula",
      },
      {
        data: "responsable",
      },
      {
        data: "dependencia",
      },
      {
        data: "cargo",
      },
      {
        data: "sede",
      },
      {
        data: "ubicacion",
      },
      {
        data: "tipo_unidad",
      },
      {
        data: "ciudad",
      },
      {
        data: "celular",
      },
      {
        data: "mdi_acdj",
      },
      {
        data: "mdy_acdj",
      },
      {
        data: "itmd_acdj",
      },
      {
        data: "dms_acdj",
      }
    ],
    columnDefs: [
      {
        width: "2%",
        targets: 0,
      },
      {
        width: "2%",
        targets: 1,
      },
      {
        width: "2%",
        targets: 2,
      },
      {
        width: "2%",
        targets: 3,
      },
      {
        width: "2%",
        targets: 4,
      },
      {
        width: "2%",
        targets: 5,
      },
      {
        width: "2%",
        targets: 6,
      },
      {
        width: "2%",
        targets: 7,
      },
      {
        width: "2%",
        targets: 8,
      },
      {
        width: "2%",
        targets: 9,
      },
      {
        width: "2%",
        targets: 10,
      },
      {
        width: "2%",
        targets: 11,
      },
      {
        width: "2%",
        targets: 12,
      },
      {
        width: "2%",
        targets: 13,
      },
      {
        width: "2%",
        targets: 14,
      },
      {
        width: "2%",
        targets: 15,
      }
    ],
  });
  editar("#mitabla tbody", tabla);
  eliminar("#mitabla tbody", tabla);
};

var nuevo = function () {
  $("#nuevo").on("click", function () {
    limpiar();
    mostrarForm(true);
  });
};

var editar = function (tbody, table) {
  $(tbody).on("click", "button.editar", function () {
    var dato = table.row($(this).parents("tr")).data();
    mostrarForm(true);
    var id = $("#id").val(dato.id);
    var cedula = $("#cedula").val(dato.cedula);
    var responsable = $("#responsable").val(dato.responsable);
    var dependencia = $("#dependencia").val(dato.dependencia );
    var cargo = $("#cargo").val(dato.cargo);
    var sede = $("#sede").val(dato.sede);
    var ubicacion = $("#ubicacion").val(dato.ubicacion);
    var tipo_unidad = $("#tipo_unidad").val(dato.tipo_unidad);
    var ciudad = $("#ciudad").val(dato.ciudad);
    var celular = $("#celular").val(dato.celular);
    var mdi_acdj = $("#mdi_acdj").val(dato.mdi_acdj);
    var mdy_acdj = $("#mdy_acdj").val(dato.mdy_acdj);
    var itmd_acdj = $("#itmd_acdj").val(dato.itmd_acdj);
    var dms_acdj = $("#dms_acdj").val(dato.dms_acdj);
  });
};

var guardar = function () {
  $("form").on("submit", function (e) {
    e.preventDefault();
    var datos = new FormData($("form")[0]);
    console.log(datos);
    $.ajax({
      url: RUTA_URL + "crearUsuario",
      method: "POST",
      data: datos,
      processData: false,
      contentType: false,
    })
      .done(function (data) {
        alert("Accion Realizada con exito !");
        mostrarForm(false);
        $("#mitabla").DataTable().ajax.reload();
      })
      .fail(function (data) {
        alert("operacion fallida !");
        mostrarForm(false);
      });
  });
};

var limpiar = function () {
  $("#id").val("");
  $("#cedula").val("");
  $("#responsable").val("");
  $("#dependencia").val("");
  $("#cargo").val("");
  $("#sede").val("");
  $("#ubicacion").val("");
  $("#tipo_unidad").val("");
  $("#ciudad").val("");
  $("#celular").val("");
  $("#mdi_acdj").val("");
  $("#mdy_acdj").val("");
  $("#itmd_acdj").val("");
  $("#dms_acdj").val("");
};

var cancelar = function () {
  $("#cancelar").on("click", function () {
    limpiar();
    mostrarForm(false);
    $("#mitabla").DataTable().ajax.reload();
  });
};

var mostrarForm = function (estado) {
  if (estado) {
    $("#formulario").show();
    $("#vistatabla").hide();
  } else {
    $("#formulario").hide();
    $("#vistatabla").show();
  }
};

var eliminar = function (tbody, table) {
  $(tbody).on("click", "button.eliminar", function () {
    var dato = table.row($(this).parents("tr")).data();
    var respuesta = confirm(
      "Seguro que desea eliminar ? : " +
        dato.id
    );
    if (respuesta) {
      $.ajax({
        method: "POST",
        url: RUTA_URL + "eliminarUsuario",
        data: { id: dato.id },
      })
        .done(function (data) {
          alert("Accion Realizada con exito !");
          $("#mitabla").DataTable().ajax.reload();
        })
        .fail(function (data) {
          alert("operacion fallida !");
        });
    } else {
      alert("Operacion cancelada por el usuario.");
    }
  });
};

$(document).ready(function () {
  listarusuario();
  nuevo();
  editar();
  eliminar();
  guardar();
  cancelar();
  mostrarForm(false);
});