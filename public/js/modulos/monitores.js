const RUTA_URL = "http://localhost/inventarioIN/Monitores/";
var listarmonitores = function () {
  var tabla = $("#mitabla").DataTable({
    "scrollX": true,
    ajax: {
      url: RUTA_URL + "llenarMonitores",
      dataSrc: "",
    },
    columns: [
      {
        defaultContent:
          "<button type='button' class ='editar btn btn-outline-success' data-toggle='tooltip' data-placement='top' title='Edita monitor'><i class='icon-edit-sign'></i></button>",
      },
      {
        defaultContent:
          "<button type='button' class ='eliminar btn btn-outline-success' data-toggle='tooltip' data-placement='top' title='Elimina monitor'><i class='icon-trash'></i></button>",
      },
      {
        data: "id",
      },
      {
        data: "origen_propiedad",
      },
      {
        data: "stock_estado",
      },
      {
        data: "uso_tipoUnidad",
      },
      {
        data: "ubicacion_ciudad",
      },
      {
        data: "ubicacion_sede",
      },
      {
        data: "ce_placa",
      },
      {
        data: "ce_marca",
      },
      {
        data: "ce_tecnologia",
      },
      {
        data: "ce_modelo",
      },
      {
        data: "ce_serial",
      },
      {
        data: "usuario_cedula",
      },
      {
        data: "usuario_responsable",
      },
      {
        data: "usuario_cargo",
      },
      {
        data: "usuario_dependencia",
      },
      {
        data: "usuario_ubicacion",
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
    var origen_propiedad = $("#origen_propiedad").val(dato.origen_propiedad);
    var stock_estado = $("#stock_estado").val(dato.stock_estado);
    var uso_tipoUnidad = $("#uso_tipoUnidad").val(dato.uso_tipoUnidad);
    var ubicacion_ciudad = $("#ubicacion_ciudad").val(dato.ubicacion_ciudad);
    var ubicacion_sede = $("#ubicacion_sede").val(dato.ubicacion_sede);
    var ce_placa = $("#ce_placa").val(dato.ce_placa);
    var ce_marca = $("#ce_marca").val(dato.ce_marca);
    var ce_tecnologia = $("#ce_tecnologia").val(dato.ce_tecnologia);
    var ce_modelo = $("#ce_modelo").val(dato.ce_modelo);
    var ce_serial = $("#ce_serial").val(dato.ce_serial);
    var usuario_cedula = $("#usuario_cedula").val(dato.usuario_cedula);
    var usuario_responsable = $("#usuario_responsable").val(dato.usuario_responsable);
    var usuario_cargo = $("#usuario_cargo").val(dato.usuario_cargo);
    var usuario_dependencia = $("#usuario_dependencia").val(dato.usuario_dependencia);
    var usuario_ubicacion = $("#usuario_ubicacion").val(dato.usuario_ubicacion);
  });
};

var guardar = function () {
  $("form").on("submit", function (e) {
    e.preventDefault();
    var datos = new FormData($("form")[0]);
    console.log(datos);
    $.ajax({
      url: RUTA_URL + "crearMonitores",
      method: "POST",
      data: datos,
      processData: false,
      contentType: false,
    })
      .done(function (data) {
        alert("Accion Realizada con exito !");
        limpiar();
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
  $("#origen_propiedad").val("");
  $("#stock_estado").val("");
  $("#uso_tipoUnidad").val("");
  $("#ubicacion_ciudad").val("");
  $("#ubicacion_sede").val("");
  $("#ce_placa").val("");
  $("#ce_marca").val("");
  $("#ce_tecnologia").val("");
  $("#ce_modelo").val("");
  $("#ce_serial").val("");
  $("#usuario_cedula").val("");
  $("#usuario_responsable").val("");
  $("#usuario_cargo").val("");
  $("#usuario_dependencia").val("");
  $("#usuario_ubicacion").val("");
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
        url: RUTA_URL + "eliminarMonitores",
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
  listarmonitores();
  nuevo();
  editar();
  eliminar();
  guardar();
  cancelar();
  mostrarForm(false);
});