<?php require RUTA_APP . '/views/inc/header2.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="col-md-12">
            <div class="card bg-dark">
                <div class="card-header text-center text-white">
                    <!---->
                    <div class="row-center">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card bg-light">

                                <h5 class="text-blue text-center">Haz <span class="text-red">(click en los botones) </span><span>para ver la Informacion.</h5>
                                <p class="text-center">

                                    <a class="btn btn-success" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">BIENVENIDOS</a>
                                    <button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">ADVERTENCIA</button>
                                    <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">ACERCA DE</button>    
                                      
                                </p>

                                <div class="row">
                                    <div class="col">
                                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                                            <div class="card card-body">
                                            <div class="card-title text-center">
                                                <h5 class="text-center text-light badge badge-dark" style="font-size:22px;">Areandina <span class="badge badge-success" style="font-size:15px;">Nacional</span></h5>
                                            </div>

                                            <div class="card-title text-center">
                                                <h5 class="text-center text-light badge badge-success" style="font-size:222px;">A</h5>
                                            </div>
                                            <p class="text-black">Bienvenidos al Inventario Nacional Del Arenadina. Espero que tengan una experiencia agradable, este aplicativo web se desarrollo para agilizar los registro de equipos.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="collapse multi-collapse" id="multiCollapseExample2">
                                        <div class="card card-body">
                                            <div class="card-title text-center">
                                                <h5 class="text-center text-light badge badge-dark" style="font-size:22px;">Areandina <span class="badge badge-danger" style="font-size:15px;">Nacional</span></h5>
                                            </div>

                                            <div class="card-title text-center">
                                                <h5 class="text-center text-light badge badge-danger" style="font-size:222px;">A</h5>
                                            </div>
                                            <p class="text-black">Al momento de ingresar a este portal, usted se Responsabiliza de los datos que hay, cualquier perdida de datos o modificacion no autorizada se le suspendera el acceso a este pagina y se le hara su devido proceso.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="collapse multi-collapse" id="multiCollapseExample3">
                                        <div class="card card-body">
                                        <div class="card-title text-center">
                                            <h5 class="text-center text-light badge badge-dark" style="font-size:22px;">Areandina <span class="badge badge-info" style="font-size:15px;">Nacional</span></h5>
                                        </div>

                                        <div class="card-title text-center">
                                            <h5 class="text-center text-light badge badge-info" style="font-size:222px;">A</h5>
                                        </div>
                                        <p class="text-black">Desarrollado por - Jhon David Valencia Montoya</p>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>        
            </div>
        </div>
    </section>

</div>
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
<script src="<?php echo RUTA_URL; ?>/js/modulos/admin.js"></script>

<?php require RUTA_APP . '/views/inc/footer2.php'; ?>