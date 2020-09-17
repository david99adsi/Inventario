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
                        <b>Monitores</b> <button type="button" id="nuevo" class="btn btn-light" data-toggle='tooltip'
                            title=' Agregar un monitor'> <i class="icon-plus"></i> </button>
                    </div>
                    <div class="card-body">
                        <table id="mitabla" class=" display nowrap" style="width:100%">
                            <thead class="text-center">
                                <tr">
                                    <th></th>
                                    <th></th>
                                    <th>Id</th>
                                    <th>Origen_propiedad</th>
                                    <th>Stock_estado</th>
                                    <th>Uso_tipoUnidad</th>
                                    <th>Ubicacion_ciudad</th>
                                    <th>Ubicacion_sede</th>
                                    <th>ce_placa</th>
                                    <th>ce_marca</th>
                                    <th>ce_tecnologia</th>
                                    <th>c_modelo</th>
                                    <th>c_serial</th>
                                    <th>usuario_cedula</th>
                                    <th>usuario_responsable</th>
                                    <th>usuario_cargo</th>
                                    <th>usuario_dependenica</th>
                                    <th>usuario_ubicacion</th>
                                </tr>
                            </thead>
                            <tfoot class="text-center">
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>Id</th>
                                    <th>Origen_propiedad</th>
                                    <th>Stock_estado</th>
                                    <th>Uso_tipoUnidad</th>
                                    <th>Ubicacion_ciudad</th>
                                    <th>Ubicacion_sede</th>
                                    <th>ce_placa</th>
                                    <th>ce_marca</th>
                                    <th>ce_tecnologia</th>
                                    <th>c_modelo</th>
                                    <th>c_serial</th>
                                    <th>usuario_cedula</th>
                                    <th>usuario_responsable</th>
                                    <th>usuario_cargo</th>
                                    <th>usuario_dependenica</th>
                                    <th>usuario_ubicacion</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

                <div class="card" id="formulario">
                    <div class="card-header text-white bg-success">
                        <b>MONITORES</b>
                    </div>
                    <div class="card-body btn-dark">
                        <form class="formeditar" method="POST">
                            <div class="row-center">
                                <div>
                                <h5 class="text-green">PORFAVOR DILIGENCIAR CON LA INFORMACION REQUERIDA <span class="text-red">(ESPACIOS OBLIGATORIOS) *</span></h5>
                                    <div class="form-row">
                                        <div class="form.group col-md-1">
                                            <label for="my-input">Id</label>
                                            <input id="id" class="form-control" type="text" name="id" readonly placeholder="Id."> <!-- readonly sirve para bloquear el input si no queremos que lo utilicen  -->
                                        </div>

                                        <div class="form.group col-md-3">
                                            <label for="my-input">Origen Propiedad</label>
                                            <input id="origen_propiedad" class="form-control" type="text" placeholder="Propio" name="origen_propiedad" required
                                            placeholder="Origen Propiedad.">
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">Stock Estado</label>
                                            <input id="stock_estado" class="form-control" type="text" name="stock_estado" required
                                            placeholder="Stock Estado.">
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">Uso Tipo De Unidad</label>
                                            <input id="uso_tipoUnidad" class="form-control" type="text" name="uso_tipoUnidad" required
                                            placeholder="Uso Tipo De Unidad.">
                                        </div>

                                    </div>

                                    <div class="form-row">
                                        <div class="form.group col-md-4">
                                            <label for="my-input">Ubicacion Ciudad</label>
                                            <input id="ubicacion_ciudad" class="form-control" type="text" name="ubicacion_ciudad" required
                                            placeholder="Ubicacion Ciudad.">
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">Ubicacion Sede</label>
                                            <input id="ubicacion_sede" class="form-control" type="text" name="ubicacion_sede" required
                                            placeholder="Ubicacion Sede.">
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">Ce Placa</label>
                                            <input id="ce_placa" class="form-control" type="text" name="ce_placa" required
                                            placeholder="Ce Placa.">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form.group col-md-4">
                                            <label for="my-input">Ce Marca</label>
                                            <input id="ce_marca" class="form-control" type="text" name="ce_marca" required
                                            placeholder="Ce Marca.">
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">Ce Tecnologia</label>
                                            <input id="ce_tecnologia" class="form-control" type="text" name="ce_tecnologia" required
                                            placeholder="Ce Tecnologia.">
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">Ce Modelo</label>
                                            <input id="ce_modelo" class="form-control" type="text" name="ce_modelo" required
                                            placeholder="ce Modelo.">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form.group col-md-4">
                                            <label for="my-input">Ce Serial</label>
                                            <input id="ce_serial" class="form-control" type="text" name="ce_serial" required
                                            placeholder="Ce Serial.">
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">Usuario Cedula</label>
                                            <input id="usuario_cedula" class="form-control" type="number" name="usuario_cedula" required
                                            placeholder="Usuario/Cedula.">
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">Usuario Responsable</label>
                                            <input id="usuario_responsable" class="form-control" type="text" name="usuario_responsable" required
                                            placeholder="Usuario/Responsable.">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form.group col-md-4">
                                            <label for="my-input">Usuario Cargo</label>
                                            <input id="usuario_cargo" class="form-control" type="text" name="usuario_cargo" required
                                            placeholder="Usuario/Cargo.">
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">Usuario Dependencia</label>
                                            <input id="usuario_dependencia" class="form-control" type="text" name="usuario_dependencia" required
                                            placeholder="Usuario/Dependencia.">
                                        </div>

                                        <div class="form.group col-md-4">
                                            <label for="my-input">Usuario Ubicacion</label>
                                            <input id="usuario_ubicacion" class="form-control" type="text" name="usuario_ubicacion" required
                                            placeholder="Usuario/Ubicacion.">
                                        </div>
                                    </div>

                                    <div class="card-footer text-center">
                                        <button class="btn btn-outline-secondary" type="button" id="cancelar"><i class="icon-reply"></i>
                                            Cancelar</button>

                                        <input id="guardar" class="btn btn-outline-success" type="submit" value="Guardar">
                                    </div>

                                    
                                </div>
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
                    <--- Origen_propiedad | Stock_estado | Uso_tipoUnidad | Ubicacion_ciudad | Ubicacion_sede | <br> |
                                ce_placa | ce_marca | ce_tecnologia | c_modelo | c_serial | usuario_cedula | usuario_responsable | <br> |
                                usuario_cargo | usuario_dependenica | usuario_ubicacion |--->
                    </div>    
                </div>
            </div>
        </div>   
        
    </section>
</nav>
</div>

<!-- jQuery 3 -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
< script src = "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
integrity = "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
crossorigin = "anonymous" >
</script>
<!-- AdminLTE App -->
<script src="<?php echo RUTA_URL; ?>/js/adminlte.js"></script>

<script type="text/javascript"
    src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-html5-1.6.1/datatables.min.js"></script>

<script src="<?php echo RUTA_URL; ?>/js/modulos/monitores.js"></script>

<?php require RUTA_APP . '/views/inc/footer2.php'; ?>