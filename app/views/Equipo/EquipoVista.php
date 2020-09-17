<?php require RUTA_APP . '/views/inc/header2.php'; ?>
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
<nav>
    <!-- Main content -->
    <section class="content">

        <div class="row">

            <div class="col-md-12">
                <div class="card" id="vistatabla">
                    <div class="card-header badge-success">
                        <b>EQUIPO</b> <button type="button" id="nuevo" class="btn btn-light"  data-toggle='tooltip'
                            title=' Agregar un Bienes'> <i class="icon-plus"></i> </button>
                    </div>

                    <div class="card-body">
                        <table id="mitabla" class=" display nowrap" style="width:100%">
                            <thead class="text-center">
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>Id</th>
                                    <th>Item</th>
                                    <th>origen_propiedad</th>
                                    <th>origen_estado</th>
                                    <th>uso_tipoUnidad</th>
                                    <th>ubicacion_ciudad</th>
                                    <th>ubicacion_sede</th>
                                    <th>ce_placa</th>
                                    <th>ce_serie</th>
                                    <th>ce_tipo</th>
                                    <th>ce_marca</th>
                                    <th>ce_modelo</th>
                                    <th>ce_marcaProcesador</th>
                                    <th>ce_tipoProcesador</th>
                                    <th>ce_velocidadProcesador</th>
                                    <th>ce_memoria</th>
                                    <th>ce_dd</th>
                                    <th>ce_nombrePc</th>
                                    <th>ce_macAdreesEthernet</th>
                                    <th>ce_macAdressWifi</th>
                                    <th>ce_hojaDeVida</th>
                                    <th>ce_sistemaOperativo</th>
                                    <th>usuario_cedula</th>
                                    <th>usuario_responsable</th>
                                    <th>usuario_cargo</th>
                                    <th>usuario_dependencia</th>
                                    <th>usuario_ubicacion</th>
                                    <th>da_fecha</th>
                                    <th>da_estado</th>
                                    <th>da_agenteDeRed</th>
                                    <th>ad_antivirus</th>
                                    <th>monitor_item</th>
                                    <th>monitor_placa</th>
                                    <th>monitor_marca</th>
                                    <th>monitor_modelo</th>
                                    <th>monitor_serie</th>
                                    <th>telefono_item</th>
                                    <th>telefono_ext</th>
                                    <th>telefono_modelo</th>
                                    <th>telefono_serie</th>
                                    <th>telefono_numeroPlaca</th>
                                    <th>oh_item</th>
                                    <th>oh_otros</th>
                                    <th>maribel_observacion</th>
                                    <th>maribel_factura</th>
                                    <th>maribel_proveedor</th>
                                    <th>maribel_fechaInicio</th>
                                    <th>maribel_fechaFinal</th>
                                    <th>maribel_garantia</th>
                                </tr>
                            </thead>
                            <tfoot class="text-center">
                                <tr>
                                <th></th>
                                    <th></th>
                                    <th>Id</th>
                                    <th>Item</th>
                                    <th>origen_propiedad</th>
                                    <th>origen_estado</th>
                                    <th>uso_tipoUnidad</th>
                                    <th>ubicacion_ciudad</th>
                                    <th>ubicacion_sede</th>
                                    <th>ce_placa</th>
                                    <th>ce_serie</th>
                                    <th>ce_tipo</th>
                                    <th>ce_marca</th>
                                    <th>ce_modelo</th>
                                    <th>ce_marcaProcesador</th>
                                    <th>ce_tipoProcesador</th>
                                    <th>ce_velocidadProcesador</th>
                                    <th>ce_memoria</th>
                                    <th>ce_dd</th>
                                    <th>ce_nombrePc</th>
                                    <th>ce_macAdreesEthernet</th>
                                    <th>ce_macAdressWifi</th>
                                    <th>ce_hojaDeVida</th>
                                    <th>ce_sistemaOperativo</th>
                                    <th>usuario_cedula</th>
                                    <th>usuario_responsable</th>
                                    <th>usuario_cargo</th>
                                    <th>usuario_dependencia</th>
                                    <th>usuario_ubicacion</th>
                                    <th>da_fecha</th>
                                    <th>da_estado</th>
                                    <th>da_agenteDeRed</th>
                                    <th>ad_antivirus</th>
                                    <th>monitor_item</th>
                                    <th>monitor_placa</th>
                                    <th>monitor_marca</th>
                                    <th>monitor_modelo</th>
                                    <th>monitor_serie</th>
                                    <th>telefono_item</th>
                                    <th>telefono_ext</th>
                                    <th>telefono_modelo</th>
                                    <th>telefono_serie</th>
                                    <th>telefono_numeroPlaca</th>
                                    <th>oh_item</th>
                                    <th>oh_otros</th>
                                    <th>maribel_observacion</th>
                                    <th>maribel_factura</th>
                                    <th>maribel_proveedor</th>
                                    <th>maribel_fechaInicio</th>
                                    <th>maribel_fechaFinal</th>
                                    <th>maribel_garantia</th>
                                </tr>
                            </tfoot>
                        </table>

                    </div>

                </div>


                <div class="card" id="formulario">
                    <div class="card-header text-white bg-success">
                        <b>EQUIPO</b>
                    </div>
                    <!-- creamos una tarjeta para el formulario -->
                    <div class="card-body bg-dark text-white">
                        <form class="formeditar" method="POST">
                            <div class="row-center">
                                <div>
                                    <h5 class="text-green">PORFAVOR DILIGENCIAR CON LA INFORMACION REQUERIDA <span class="text-red">(ESPACIOS OBLIGATORIOS) *</span></h5>
                                    <div class="form-row">
                                        <div class="form.group col-md-4">
                                            <label for="my-input">Id</label>
                                            <input id="id" class="form-control" type="number" name="id" readonly placeholder="Id."> <!-- readonly sirve para bloquear el input si no queremos que lo utilicen  -->
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">Item</label>
                                            <input id="item" class="form-control" type="number" name="item" required placeholder="Item.">
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">origen_propiedad</label>
                                            <input id="origen_propiedad" class="form-control" type="text" name="origen_propiedad" required 
                                            placeholder="Origen Propiedad.">
                                        </div>
                                    </div> 

                                    <div class="form-row">
                                        <div class="form.group col-md-4">
                                            <label for="my-input">origen_estado</label>
                                            <input id="origen_estado" class="form-control" type="text" name="origen_estado" required
                                            placeholder="Origen Estado.">
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">uso_tipoUnidad</label>
                                            <input id="uso_tipoUnidad" class="form-control" type="text" name="uso_tipoUnidad" required
                                            placeholder="Uso Tipo De Unidad">
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">ubicacion_ciudad</label>
                                            <input id="ubicacion_ciudad" class="form-control" type="text" name="ubicacion_ciudad" required
                                            placeholder="Ubicacion Ciudad.">
                                        </div>
                                    </div> 

                                    <div class="form-row">
                                        <div class="form.group col-md-4">
                                            <label for="my-input">ubicacion_sede</label>
                                            <input id="ubicacion_sede" class="form-control" type="text" name="ubicacion_sede" required
                                            placeholder="Ubicacion Sede.">
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">ce_placa</label>
                                            <input id="ce_placa" class="form-control" type="number" name="ce_placa" required>
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">ce_serie</label>
                                            <input id="ce_serie" class="form-control" type="text" name="ce_serie" required
                                            placeholder="Ce Serie.">
                                        </div>
                                        
                                    </div> 

                                    <div class="form-row">
                                        <div class="form.group col-md-4">
                                            <label for="my-input">ce_tipo</label>
                                            <input id="ce_tipo" class="form-control" type="text" name="ce_tipo" required
                                            placeholder="Ce Tipo.">
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">ce_marca</label>
                                            <input id="ce_marca" class="form-control" type="text" name="ce_marca" required
                                            placeholder="Ce Marca.">
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">ce_modelo</label>
                                            <input id="ce_modelo" class="form-control" type="text" name="ce_modelo" required
                                            placeholder="Ce Modelo.">
                                        </div>
                                    </div> 

                                    <div class="form-row">
                                        <div class="form.group col-md-4">
                                            <label for="my-input">ce_marcaProcesador</label>
                                            <input id="ce_marcaProcesador" class="form-control" type="text" name="ce_marcaProcesador" required
                                            placeholder="Ce Marca Del Procesador.">
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">ce_tipoProcesador</label>
                                            <input id="ce_tipoProcesador" class="form-control" type="text" name="ce_tipoProcesador" required
                                            placeholder="Ce Tipo De Procesador.">
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">ce_velocidadProcesador</label>
                                            <input id="ce_velocidadProcesador" class="form-control" type="text" name="ce_velocidadProcesador" required
                                            placeholder="Ce Velocidad Del Procesador.">
                                        </div>
                                    </div> 

                                    <div class="form-row">
                                        <div class="form.group col-md-4">
                                            <label for="my-input">ce_memoria</label>
                                            <input id="ce_memoria" class="form-control" type="text" name="ce_memoria" required
                                            placeholder="Ce Memoria">
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">ce_dd</label>
                                            <input id="ce_dd" class="form-control" type="text" name="ce_dd" required
                                            placeholder="Ce Disco Duro.">
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">ce_nombrePc</label>
                                            <input id="ce_nombrePc" class="form-control" type="text" name="ce_nombrePc" required
                                            placeholder="Ce Nombre Del Pc.">
                                        </div>
                                    </div> 

                                    <div class="form-row">
                                        <div class="form.group col-md-4">
                                            <label for="my-input">ce_macAdreesEthernet</label>
                                            <input id="ce_macAdreesEthernet" class="form-control" type="text" name="ce_macAdreesEthernet" required
                                            placeholder="Ce MacAdress Ethernet.">
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">ce_macAdressWifi</label>
                                            <input id="ce_macAdreesWifi" class="form-control" type="text" name="ce_macAdreesWifi" required
                                            placeholder="Ce Mac Adress Wifi.">
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">ce_hojaDeVida</label>
                                            <input id="ce_hojaDeVida" class="form-control" type="text" name="ce_hojaDeVida" required
                                            placeholder="Ce Hoja De Vida.">
                                        </div>
                                    </div> 

                                    <div class="form-row">
                                        <div class="form.group col-md-4">
                                            <label for="my-input">ce_sistemaOperativo</label>
                                            <input id="ce_sistemaOperativo" class="form-control" type="text" name="ce_sistemaOperativo" required
                                            placeholder="Ce Sistema Operativo.">
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">usuario_cedula</label>
                                            <input id="usuario_cedula" class="form-control" type="number" name="usuario_cedula" required>
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">usuario_responsable</label>
                                            <input id="usuario_responsable" class="form-control" type="text" name="usuario_responsable" required
                                            placeholder="Usuario/Responsable.">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form.group col-md-4">
                                            <label for="my-input">usuario_cargo</label>
                                            <input id="usuario_cargo" class="form-control" type="text" name="usuario_cargo" required
                                            placeholder="Usuario/Cargo.">
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">usuario_dependencia</label>
                                            <input id="usuario_dependencia" class="form-control" type="text" name="usuario_dependencia" required
                                            placeholder="Usuario/Responsable.">
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">usuario_ubicacion</label>
                                            <input id="usuario_ubicacion" class="form-control" type="text" name="usuario_ubicacion" required
                                            placeholder="Usuario/Ubicacion.">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form.group col-md-4">
                                            <label for="my-input">da_fecha</label>
                                            <input id="da_fecha" class="form-control" type="date" name="da_fecha" required>
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">da_estado</label>
                                            <input id="da_estado" class="form-control" type="text" name="da_estado" required
                                            placeholder="Da Estado.">
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">da_agenteDeRed</label>
                                            <input id="da_agenteDeRed" class="form-control" type="text" name="da_agenteDeRed" required
                                            placeholder="Da Agente De Red.">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form.group col-md-4">
                                            <label for="my-input">ad_antivirus</label>
                                            <input id="ad_antivirus" class="form-control" type="text" name="ad_antivirus" required
                                            placeholder="Ad Antivirus">
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">monitor_placa</label>
                                            <input id="monitor_placa" class="form-control" type="text" name="monitor_placa" required
                                            placeholder="Monitor Placa.">
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">monitor_marca</label>
                                            <input id="monitor_marca" class="form-control" type="text" name="monitor_marca" required
                                            placeholder="Monitor Marca.">
                                        </div>

                                    </div>

                                    <div class="form-row">
                                        <div class="form.group col-md-4">
                                            <label for="my-input">monitor_item</label>
                                            <input id="monitor_item" class="form-control" type="number" name="monitor_item" required>
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">monitor_modelo</label>
                                            <input id="monitor_modelo" class="form-control" type="text" name="monitor_modelo" required
                                            placeholder="Monitor Modelo.">
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">monitor_serie</label>
                                            <input id="monitor_serie" class="form-control" type="text" name="monitor_serie" required
                                            placeholder="Monitor Serie.">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form.group col-md-4">
                                            <label for="my-input">telefono_item</label>
                                            <input id="telefono_item" class="form-control" type="number" name="telefono_item" required>
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">telefono_ext</label>
                                            <input id="telefono_ext" class="form-control" type="number" name="telefono_ext" required>
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">telefono_modelo</label>
                                            <input id="telefono_modelo" class="form-control" type="text" name="telefono_modelo" required
                                            placeholder="Telefono Modelo.">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form.group col-md-4">
                                            <label for="my-input">telefono_numeroPlaca</label>
                                            <input id="telefono_numeroPlaca" class="form-control" type="number" name="telefono_numeroPlaca" required>
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">oh_item</label>
                                            <input id="oh_item" class="form-control" type="number" name="oh_item" required>
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">oh_otros</label>
                                            <input id="oh_otros" class="form-control" type="text" name="oh_otros" required
                                            placeholder="Og Otros.">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form.group col-md-4">
                                            <label for="my-input">maribel_observacion</label>
                                        <input id="maribel_observaciones" class="form-control" type="text" name="maribel_observaciones" required
                                        placeholder="Maribel Observaciones.">
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">maribel_factura</label>
                                            <input id="maribel_factura" class="form-control" type="number" name="maribel_factura" required>
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">maribel_proveedor</label>
                                            <input id="maribel_proveedor" class="form-control" type="text" name="maribel_proveedor" required
                                            placeholder="Maribel Proveedor.">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form.group col-md-6">
                                            <label for="my-input">maribel_fechaInicio</label>
                                            <input id="maribel_fechaInicio" class="form-control" type="date" name="maribel_fechaInicio" required>
                                        </div>

                                        <div class="form.group col-md-6">
                                            <label for="my-input">maribel_fechaFinal</label>
                                            <input id="maribel_fechaFinal" class="form-control" type="date" name="maribel_fechaFinal" required>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form.group col-md-5">
                                            <label for="my-input">maribel_garantia</label>
                                            <input id="maribel_garantia" class="form-control" type="text" name="maribel_garantia" required
                                            placeholder="Maribel Garantia.">
                                        </div>
                                    </div>

                                    <div class="card-footer text-center">
                                        <button class="btn btn-secondary" type="button" id="cancelar"><i class="icon-reply"></i>
                                            Cancelar</button>

                                        <input id="guardar" class="btn btn-success" type="submit" value="Guardar">
                                    </div>
                                <div>    
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Informacion para el usuario-->
    <section class="content">

        <div class="col-md-12">
            <div class="card bg-success">
                <div class="card-header text-center text-white">
                    <b>Elementos de la Tabla:</b>
                    <div class="alert alert-light text-center" role="alert">
                    <--- item | origen_propiedad | origen_estado |  uso_tipoUnidad |  ubicacion_ciudad | ubicacion_sede | 
                        <br>ce_placa | ce_serie | ce_tipo | ce_marca | ce_modelo | ce_marcaProcesador | 
                        <br>ce_tipoProcesador | ce_velocidadProcesador | ce_memoria | ce_dd | ce_nombrePc | ce_macAdreesEthernet | 
                        <br>ce_macAdreesWifi | ce_hojaDeVida | ce_sistemaOperativo | usuario_cedula | usuario_responsable | usuario_cargo | 
                        <br>usuario_dependencia |  usuario_ubicacion | da_fecha | da_estado | da_agenteDeRed | ad_antivirus | 
                        <br>monitor_item | monitor_placa | monitor_marca | monitor_modelo | monitor_serie | telefono_item | 
                        <br>telefono_ext | telefono_modelo | telefono_serie | telefono_numeroPlaca | oh_item |oh_otros | 
                        <br>maribel_observaciones | maribel_factura | maribel_proveedor | maribel_fechaInicio | maribel_fechaFinal | maribel_garantia --->
                    </div>    
                </div>
            </div>
        </div>   
        
    </section>
<nav>
</div>

<!-- jQuery 3 -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
<script src = "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
integrity = "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
crossorigin = "anonymous" >
</script>
<!-- AdminLTE App -->
<script src="<?php echo RUTA_URL; ?>/js/adminlte.js"></script>

<script type="text/javascript"
    src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-html5-1.6.1/datatables.min.js"></script>

<script src="<?php echo RUTA_URL; ?>/js/modulos/Equipo.js"></script>

<?php require RUTA_APP . '/views/inc/footer2.php'; ?>