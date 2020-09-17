const RUTA_URL = "http://localhost/inventarioIN/Equipo/";
var listarEquipo = function () {
  var tabla = $("#mitabla").DataTable({
    "scrollX": true,
    ajax: {
      url: RUTA_URL + "llenarEquipo",
      dataSrc: "",
    },
    columns: [
      {
        defaultContent:
          "<button type='button' class ='editar btn btn-outline-success' data-toggle='tooltip' data-placement='top' title='Edita equipos'><i class='icon-edit-sign'></i></button>",
      },
      {
        defaultContent:
          "<button type='button' class ='eliminar btn btn-outline-success' data-toggle='tooltip' data-placement='top' title='Elimina equipos'><i class='icon-trash'></i></button>",
      },
      {
        data: "id",
      },
      {
        data: "item",
      },
      {
        data: "origen_propiedad",
      },
      {
        data: "origen_estado",
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
        data: "ce_serie",
      },
      {
        data: "ce_tipo",
      },
      {
        data: "ce_marca",
      },
      {
        data: "ce_modelo",
      },
      {
        data: "ce_marcaProcesador",
      },
      {
        data: "ce_tipoProcesador",
      },
      {
        data: "ce_velocidadProcesador",
      },
      {
        data: "ce_memoria",
      },
      {
        data: "ce_dd",
      },
      {
        data: "ce_nombrePc",
      },
      {
        data: "ce_macAdreesEthernet",
      },
      {
        data: "ce_macAdreesWifi",
      },
      {
        data: "ce_hojaDeVida",
      },
      {
        data: "ce_sistemaOperativo",
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
      },
      {
        data: "da_fecha",
      },
      {
        data: "da_estado",
      },
      {
        data: "da_agenteDeRed",
      },
      {
        data: "ad_antivirus",
      },
      {
        data: "monitor_item",
      },
      {
        data: "monitor_placa",
      },
      {
        data: "monitor_marca",
      },
      {
        data: "monitor_modelo",
      },
      {
        data: "monitor_serie",
      },
      {
        data: "telefono_item",
      },
      {
        data: "telefono_ext",
      },
      {
        data: "telefono_modelo",
      },
      {
        data: "telefono_serie",
      },
      {
        data: "telefono_numeroPlaca",
      },
      {
        data: "oh_item",
      },
      {
        data: "oh_otros",
      },
      {
        data: "maribel_observaciones",
      },
      {
        data: "maribel_factura",
      },
      {
        data: "maribel_proveedor",
      },
      {
        data: "maribel_fechaInicio",
      },
      {
        data: "maribel_fechaFinal",
      },
      {
        data: "maribel_garantia",
      },
    ],
    columnDefs: [
      {
        width: "5%",
        targets: 0,
      },
      {
        width: "5%",
        targets: 1,
      },
      {
        width: "5%",
        targets: 2,
      },
      {
        width: "5%",
        targets: 3,
      },
      {
        width: "5%",
        targets: 4,
      },
      {
        width: "5%",
        targets: 5,
      },
      {
        width: "5%",
        targets: 6,
      },
      {
        width: "5%",
        targets: 7,
      },
      {
        width: "5%",
        targets: 8,
      },
      {
        width: "5%",
        targets: 9,
      },
      {
        width: "5%",
        targets: 10,
      },
      {
        width: "5%",
        targets: 11,
      },
      {
        width: "5%",
        targets: 12,
      },
      {
        width: "5%",
        targets: 13,
      },
      {
        width: "5%",
        targets: 14,
      },
      {
        width: "5%",
        targets: 15,
      },
      {
        width: "5%",
        targets: 16,
      },
      {
        width: "5%",
        targets: 17,
      },
      {
        width: "5%",
        targets: 18,
      },
      {
        width: "5%",
        targets: 19,
      },
      {
        width: "5%",
        targets: 20,
      },
      {
        width: "5%",
        targets: 21,
      },
      {
        width: "5%",
        targets: 22,
      },
      {
        width: "5%",
        targets: 23,
      },
      {
        width: "5%",
        targets: 24,
      },
      {
        width: "5%",
        targets: 25,
      },
      {
        width: "5%",
        targets: 26,
      },
      {
        width: "5%",
        targets: 27,
      },
      {
        width: "5%",
        targets: 28,
      },
      {
        width: "5%",
        targets: 29,
      },
      {
        width: "5%",
        targets: 30,
      },
      {
        width: "5%",
        targets: 31,
      },
      {
        width: "5%",
        targets: 32,
      },
      {
        width: "5%",
        targets: 33,
      },
      {
        width: "5%",
        targets: 34,
      },
      {
        width: "5%",
        targets: 35,
      },
      {
        width: "5%",
        targets: 36,
      },
      {
        width: "5%",
        targets: 37,
      },
      {
        width: "5%",
        targets: 38,
      },
      {
        width: "5%",
        targets: 39,
      },
      {
        width: "5%",
        targets: 40,
      },
      {
        width: "5%",
        targets: 41,
      },
      {
        width: "5%",
        targets: 42,
      },
      {
        width: "5%",
        targets: 43,
      },
      {
        width: "5%",
        targets: 44,
      },
      {
        width: "5%",
        targets: 45,
      },
      {
        width: "5%",
        targets: 46,
      },
      {
        width: "5%",
        targets: 47,
      },
      {
        width: "5%",
        targets: 48,
      }
    ],
  });
  editar("#mitabla tbody", tabla);
  eliminar("#mitabla tbody", tabla);
};

var nuevo = function () {
  $("#nuevo").on("click", function () {
    mostrarForm(true);
  });
};

var editar = function (tbody, table) {
  $(tbody).on("click", "button.editar", function () {
    var dato = table.row($(this).parents("tr")).data();
    mostrarForm(true)
    var id = $("#id").val(dato.id); // 1. id
    var item = $("#item").val(dato.item); // 2. item
    var origen_porpiedad = $("#origen_propiedad").val(dato.origen_propiedad); // 3. origen_propiedad
    var origen_estado = $("#origen_estado").val(dato.origen_estado); // 4. origen_estado
    var uso_tipoUnidad = $("#uso_tipoUnidad").val(dato.uso_tipoUnidad); // 5. uso_tipoUnidad
    var ubicacion_ciudad = $("#ubicacion_ciudad").val(dato.ubicacion_ciudad); // 6. ubicacion_ciudad
    var ubicacion_sede = $("#ubicacion_sede").val(dato.ubicacion_sede); // 7. ubicacion_sede
    var ce_placa = $("#ce_placa").val(dato.ce_placa); // 8. ce_placa
    var ce_serie = $("#ce_serie").val(dato.ce_serie); // 9. ce _serie
    var ce_tipo = $("#ce_tipo").val(dato.ce_tipo); // 10. ce_tipo
    var ce_marca = $("#ce_marca").val(dato.ce_marca); // 11. ce_marca
    var ce_modelo = $("#ce_modelo").val(dato.ce_modelo); // 12. ce_modelo
    var ce_marcaProcesador = $("#ce_marcaProcesador").val(dato.ce_marcaProcesador); // 13. ce_marcaProcesador
    var ce_tipoProcesador = $("#ce_tipoProcesador").val(dato.ce_tipoProcesador); // 14. ce_tipoProcesador
    var ce_velocidadProcesador = $("#ce_velocidadProcesador").val(dato.ce_velocidadProcesador); // 15. ce_velocidadProcesador
    var ce_memoria = $("#ce_memoria").val(dato.ce_memoria); // 16. ce_memoria
    var ce_dd = $("#ce_dd").val(dato.ce_dd); // 17. ce_dd
    var ce_nombrePc = $("#ce_nombrePc").val(dato.ce_nombrePc); // 18. ce_nombrePc
    var ce_macAdreesEthernet = $("#ce_macAdreesEthernet").val(dato.ce_macAdreesEthernet); // 19. ce_macAdreesEthernet
    var ce_macAdreesWifi = $("#ce_macAdreesWifi").val(dato.ce_macAdreesWifi); // 20. ce_macAdreesWifi
    var ce_hojaDeVida = $("#ce_hojaDeVida").val(dato.ce_hojaDeVida); // 21. ce_hojaDeVida
    var ce_sistemaOperativo = $("#ce_sistemaOperativo").val(dato.ce_sistemaOperativo); // 22. ce_sistemaOperativo
    var usuario_cedula = $("#usuario_cedula").val(dato.usuario_cedula); // 23. usuario_cedula
    var usuario_responsable = $("#usuario_responsable").val(dato.usuario_responsable); // 24. usuario_responsable
    var usuario_cargo = $("#usuario_cargo").val(dato.usuario_cargo); // 25. usuario_cargo
    var usuario_dependencia = $("#usuario_dependencia").val(dato.usuario_dependencia); // 26. usuario_dependencia
    var usuario_ubicacion = $("#usuario_ubicacion").val(dato.usuario_ubicacion); // 27. usuario_ubicacion
    var da_fecha = $("#da_fecha").val(dato.da_fecha); // 28. da_fecha
    var da_estado = $("#da_estado").val(dato.da_estado); // 29. da_estado
    var da_agenteDeRed = $("#da_agenteDeRed").val(dato.da_agenteDeRed); // 30. da_agenteDeRed
    var ad_antivirus = $("#ad_antivirus").val(dato.ad_antivirus); // 31. ad_antivirus
    var monitor_item = $("#monitor_item").val(dato.monitor_item); // 32. monitor_item
    var monitor_placa = $("#monitor_placa").val(dato.monitor_placa); // 33. monitor_placa
    var monitor_marca = $("#monitor_marca").val(dato.monitor_marca); // 34. monitor_marca
    var monitor_modelo = $("#monitor_modelo").val(dato.monitor_modelo); // 35. monitor_modelo
    var monitor_serie = $("#monitor_serie").val(dato.monitor_serie); // 36. monitor_serie
    var telefono_item = $("#telefono_item").val(dato.telefono_item); // 37. telefono_item
    var telefono_ext = $("#telefono_ext").val(dato.telefono_ext); // 38. telefono_ext
    var telefono_modelo = $("#telefono_modelo").val(dato.telefono_modelo); // 39. telefono_modelo
    var telefono_serie = $("#telefono_serie").val(dato.telefono_serie); // 40. telefono_serie
    var telefono_numeroPlaca = $("#telefono_numeroPlaca").val(dato.telefono_numeroPlaca); // 41. telefono_numeroPlaca
    var oh_item = $("#oh_item").val(dato.oh_item); // 42. oh_item
    var oh_otros = $("#oh_otros").val(dato.oh_otros); // 43. oh_otros
    var maribel_observaciones = $("#maribel_observaciones").val(dato.maribel_observaciones); // 44. maribel_observaciones
    var maribel_factura = $("#maribel_factura").val(dato.maribel_factura); // 45. maribel_factura
    var maribel_proveedor = $("#maribel_proveedor").val(dato.maribel_proveedor); // 46. maribel_proveedor
    var maribel_fechaInicio = $("#maribel_fechaInicio").val(dato.maribel_fechaInicio); // 47. maribel_fechaInicio
    var maribel_fechaFinal = $("#maribel_fechaFinal").val(dato.maribel_fechaFinal); // 48. maribel_fechaFinal
    var maribel_garantia = $("#maribel_garantia").val(dato.maribel_garantia); // 49. maribel_garantia
  })
};

var guardar = function () {
  $("form").on("submit", function (e) {
    e.preventDefault(); 
    var datos = new FormData($("form")[0]);
    console.log(datos);
    $.ajax({
      url: RUTA_URL + "crearmodificarEquipo",
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
  $("#item").val("");
  $("#origen_propiedad").val("");
  $("#origen_estado").val("");
  $("#uso_tipoUnidad").val("");
  $("#ubicacion_ciudad").val("");
  $("#ubicacion_sede").val("");
  $("#ce_placa").val("");
  $("#ce_serie").val("");
  $("#ce_tipo").val("");
  $("#ce_marca").val("");
  $("#ce_modelo").val("");
  $("#ce_marcaProcesador").val("");
  $("#ce_tipoProcesador").val("");
  $("#ce_velocidadProcesador").val("");
  $("#ce_memoria").val("");
  $("#ce_dd").val("");
  $("#ce_nombrePc").val("");
  $("#ce_macAdreesEthernet").val("");
  $("#ce_macAdreesWifi").val("");
  $("#ce_hojaDeVida").val("");
  $("#ce_sistemaOperativo").val("");
  $("#usuario_cedula").val("");
  $("#usuario_responsable").val("");
  $("#usuario_cargo").val("");
  $("#usuario_dependencia").val("");
  $("#usuario_ubicacion").val("");
  $("#da_fecha").val("");
  $("#da_estado").val("");
  $("#da_agenteDeRed").val("");
  $("#ad_antivirus").val("");
  $("#monitor_item").val("");
  $("#monitor_placa").val("");
  $("#monitor_marca").val("");
  $("#monitor_modelo").val("");
  $("#monitor_serie").val("");
  $("#telefono_item").val("");
  $("#telefono_ext").val("");
  $("#telefono_modelo").val("");
  $("#telefono_serie").val("");
  $("#telefono_numeroPlaca").val("");
  $("#oh_item").val("");
  $("#oh_otros").val("");
  $("#maribel_observaciones").val("");
  $("#maribel_factura").val("");
  $("#maribel_proveedor").val("");
  $("#maribel_fechaInicio").val("");
  $("#maribel_fechaFinal").val("");
  $("#maribel_garantia").val("");
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
        dato.id +
        " " +
        dato.tipo
    );
    if (respuesta) {
      $.ajax({
        method: "POST",
        url: RUTA_URL + "eliminarEquipo",
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
  listarEquipo();
  nuevo();
  editar();
  eliminar();
  guardar();
  cancelar();
  limpiar();
  mostrarForm(false);
});