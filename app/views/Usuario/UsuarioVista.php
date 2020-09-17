<!-- ENLAZAMOS LA CABEZERA DE PAGINA AL APLICATIVO WEB -->
<?php require RUTA_APP . '/views/inc/header2.php'; ?>

<!-- ENVOLTORIO DEL CONTENDIO. CONTENIDO DE LA PAGINA -->
<div class="content-wrapper">
    <nav>
        <!-- CONTENIDO PRINCIPAL -->
        <section class="content">
            <div class="row">
                <!-- CREAMOS UNA TARJETA PARA EL DATATABLE -->
                <div class="col-md-12">
                    <div class="card" id="vistatabla">
                        <!-- CABEZERA DE LA TARJETA PARA EL DATATABLE -->
                        <div class="card-header badge-success">
                            <b>USUARIO</b> <button type="button" id="nuevo" class="btn btn-light" data-toggle='tooltip'
                                title=' Agregar un Usuario'> <i class="icon-plus"></i> </button>
                        </div>

                        <div class="card-body">
                            <table id="mitabla" class=" display nowrap" style="width:100%">
                                <!-- TITULO DE LA CABEZERA DEL DATATABLE -->
                                <thead class="text-center">
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>Id</th>
                                        <th>Cedula</th>
                                        <th>Responsable</th>
                                        <th>Dependencia</th>
                                        <th>Cargo</th>
                                        <th>Sede</th>
                                        <th>Ubicacion</th>
                                        <th>Tipo_unidad</th>
                                        <th>Ciudad</th>
                                        <th>Celular</th>
                                        <th>mdi_acdj</th>
                                        <th>mdy_acdj</th>
                                        <th>itmd_acdj</th>
                                        <th>dms_acdj</th>
                                    </tr>
                                </thead>
                                <!-- PIE DE PAGINA DEL DATA TABLE -->
                                <tfoot class="text-center">
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>Id</th>
                                        <th>Cedula</th>
                                        <th>Responsable</th>
                                        <th>Dependencia</th>
                                        <th>Cargo</th>
                                        <th>Sede</th>
                                        <th>Ubicacion</th>
                                        <th>Tipo_unidad</th>
                                        <th>Ciudad</th>
                                        <th>Celular</th>
                                        <th>mdi_acdj</th>
                                        <th>mdy_acdj</th>
                                        <th>itmd_acdj</th>
                                        <th>dms_acdj</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- CREAMOS LA TARJETA PARA EL FORMULARIO -->
                    <div class="card" id="formulario">
                        <!-- TITULO D ELA CABEZERA PARA EL FORMULARIO-->
                        <div class="card-header text-white bg-success">
                            <b>USUARIO</b>
                        </div>
                        <!-- CONTENIDO DEL FORMULARIO -->
                        <div class="card-body btn btn-dark">
                            <form class="formeditar" method="POST">
                                <div class="row-center">
                                    <div>
                                        <!-- MENSAJE DE IMPORTANCIA PARA EL USUARIO -->
                                        <h5 class="text-green">PORFAVOR DILIGENCIAR CON LA INFORMACION REQUERIDA <span class="text-red">(ESPACIOS OBLIGATORIOS) *</span></h5>
                                        <div class="form-row">

                                            <div class="form-group col-md-1">
                                                <label for="my-input">Id</label>
                                                <input id="id" class="form-control" type="text" name="id" readonly placeholder="Id"> <!-- readonly sirve para bloquear el input si no queremos que lo utilicen  -->
                                            </div>    
                                        
                                            <div class="form-group col-md-3">
                                                <label for="my-input">Cedula</label>
                                                <input id="cedula" class="form-control" type="number" name="cedula" required
                                                placeholder="Cedula.">
                                            </div>

                                            <div class="form-group col-md-4"> 
                                                <label for="my-input">Responsable</label>
                                                <input id="responsable" class="form-control" type="text" name="responsable" required
                                                placeholder="Responsable.">
                                            </div>

                                            <div class="form.group col-md-4">
                                                <label for="my-input">Dependencia</label>
                                                <input id="dependencia" class="form-control" type="text" name="dependencia" required
                                                placeholder="Dependencia.">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form.group col-md-4">
                                                <label for="my-input">Cargo</label>
                                                <input id="cargo" class="form-control" type="text" name="cargo" required
                                                placeholder="Cargo.">
                                            </div>

                                            <div class="form.group col-md-4">
                                                <label for="my-input">Sede</label>
                                                <input id="sede" class="form-control" type="text" name="sede" required
                                                placeholder="Sede.">
                                            </div>

                                            <div class="form.group col-md-4">
                                                <label for="my-input">Ubicacion</label>
                                                <input id="ubicacion" class="form-control" type="text" name="ubicacion" required
                                                placeholder="Ubicacion."> 
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form.group col-md-4">
                                                <label for="my-input">Tipo De Unidad</label>
                                                <input id="tipo_unidad" class="form-control" type="text" name="tipo_unidad" required
                                                placeholder="tipo De Unidad.">
                                            </div>

                                            <div class="form.group col-md-4">
                                                <label for="my-input">Ciudad</label>
                                                <input id="ciudad" class="form-control" type="text" name="ciudad" required
                                                placeholder="Ciudad.">
                                            </div>

                                            <div class="form.group col-md-4">
                                                <label for="my-input">Celular</label>
                                                <input id="celular" class="form-control" type="number" name="celular" required
                                                placeholder="Celular.">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form.group col-md-12">
                                                <label for="my-input">Merged Doc ID - AutoCrat Demo Job</label>
                                                <input id="mdi_acdj" class="form-control" type="text" name="mdi_acdj" required
                                                placeholder="Merged Doc ID - AutoCrat Demo Job.">
                                            </div>

                                            <div class="form.group col-md-12">
                                                <label for="my-input">Merged Doc URL - AutoCrat Demo Job</label>
                                                <input id="mdy_acdj" class="form-control" type="text" name="mdy_acdj" required
                                                placeholder="Merged Doc URL - AutoCrat Demo Job.">
                                            </div>

                                            <div class="form.group col-md-12">
                                                <label for="my-input">Link to merged Doc - AutoCrat Demo Job</label>
                                                <input id="itmd_acdj" class="form-control" type="text" name="itmd_acdj" required
                                                placeholder="Link to merged Doc - AutoCrat Demo Job.">
                                            </div>

                                            <div class="form.group col-md-12">
                                                <label for="my-input">Document Merge Status - AutoCrat Demo Job</label>
                                                <input id="dms_acdj" class="form-control" type="text" name="dms_acdj" required
                                                placeholder="Document Merge Status - AutoCrat Demo Job.">
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

        <!-- INFORMACION PARA EL USUARIO SOBRE LOS VALORES DEL DATATABLE-->
        <section class="content">

            <div class="col-md-12">
                <div class="card bg-success">
                    <div class="card-header text-center text-white">
                        <b>Elementos de la Tabla:</b>
                        <div class="alert alert-light text-center" role="alert">
                        <--- Cedula | Responsable | Dependencia | Cargo | Sede | Ubicacion | Tipo De Unidad | Ciudad | Celular |<br> | Merged Doc ID - AutoCrat Demo Job | Merged Doc URL - AutoCrat Demo Job | Link to merged Doc - AutoCrat Demo Job |<br> | Document Merge Status - AutoCrat Demo Job --->
                        </div>    
                    </div>
                </div>
            </div>   
            
        </section>
    </nav>
</div>

<!-- jQuery 3 | Popper | JAVASCRIPT -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
< script src = "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
integrity = "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
crossorigin = "anonymous">
</script>
<!-- AdminLTE App --> 
<script src="<?php echo RUTA_URL; ?>/js/adminlte.js"></script>

<script type="text/javascript"
    src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-html5-1.6.1/datatables.min.js"></script>

<script src="<?php echo RUTA_URL; ?>/js/modulos/usuario.js"></script>

// ENLAZAMOS EL PIE DE PAGINA PARA EL APLICATIVO WEB
<?php require RUTA_APP . '/views/inc/footer2.php'; ?>
