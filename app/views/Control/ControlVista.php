<?php require RUTA_APP . '/views/inc/header2.php'; ?>
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

        <div class="row">

            <div class="col-md-12">
                <div class="card" id="vistatabla">
                    <div class="card-header">
                        <b>CONTROL</b> <button type="button" id="nuevo" class="btn btn-success" data-toggle='tooltip'
                            title=' Agregar un control'> <i class="icon-plus"></i> </button>
                    </div>
                    <div class="card-body">
                        <table id="mitabla" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>ID</th>
                                    <th>IDENTIFICACION</th>
                                    <th>FECHA</th>
                                    <th>HORA-INGRESO</th>
                                    <th>HORA-SALIDA</th>
                                </tr>
                            </thead>
                        </table>

                    </div>

                </div>


                <div class="card" id="formulario">
                    <div class="card-header">
                        <b>CONTROL</b>
                    </div>
                    <div class="card-body">
                        <form class="formeditar" method="POST">
                            <div class="row">
                                <div class="col-md-5">

                                    <label for="my-input">ID</label>
                                    <input id="id" class="form-control" type="text" name="id" readonly>
                                    <label for="my-input">IDENTIFICACION</label>
                                    <input id="identificacion" class="form-control" type="text" name="identificacion" readonly>
                                    <label for="my-input">FECHA</label>
                                    <input id="fechai" class="form-control" type="date" name="fechai" required>
                                    <label for="my-input">HORA-INGRESO</label>
                                    <input id="horae" class="form-control" type="time" name="horae" required>
                                    <label for="my-input">HORA-SALIDA</label>
                                    <input id="horas" class="form-control" type="time" name="horas" required>

                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary" type="button" id="imprimir"><i class="icon-print"></i>
                                    Imprimir</button>
                                <button class="btn btn-primary" type="button" id="cancelar"><i class="icon-reply"></i>
                                    Cancelar</button>

                                <input id="guardar" class="btn btn-success" type="submit" value="Guardar">
                        </form>

                    </div>

                </div>
            </div>

        </div>
</div>
</section>
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

<script src="<?php echo RUTA_URL; ?>/js/modulos/control.js"></script>

<?php require RUTA_APP . '/views/inc/footer2.php'; ?>