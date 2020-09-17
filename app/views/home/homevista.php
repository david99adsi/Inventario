<?php require RUTA_APP . '/views/inc/header.php' ;?>
<!-- Inicio del codigo del sitio -->
<div class="container-fluid col-md-12">
    <!-- Barra de Navegacion -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <a class="navbar-brand" href="#">
            <img class="badge-light" src="<?= RUTA_URL;?>/img/logoareandina.png" alt="LogoSimbolo de la Aplicacion" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>



        <ul class="navbar-nav mr-auto basge-secondary">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <span class="basge-success text-white">Acceder al Sistema</span>
                </a>
                <div class="dropdown-menu basge-secondary" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item badge-light text-black" data-toggle="modal" data-target="#login">Ingresar al sistema</a>
                </div>
            </li>
        </ul>
</div>
</nav>

</body>
<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content contend-center">
            <div class="modal-header text-center bg-success">
                <h2 class="modal-title text-light badge badge-dark" id="loginLabel" style="font-size:22px;">Ingreso al <span class="badge badge-success">Sistema</span></h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-dark text-white">
                <form id="frmlogin" method="POST" class="text-center">
                    <div class="form-group text-center">
                        <label for="usuario">Usuario</label>
                        <input id="usuario" class="form-control text-center" type="text" name="usuario"
                            placeholder='Usuario registrado' required>
                    </div>
                    <div class="form-group text-center">
                        <label for="password">Password</label>
                        <input id="password" class="form-control text-center" type="password" name="password"
                            placeholder='Password del usuario' required>
                    </div>
                    <div class="form-group text-center">
                        <input id="enviar" class="btn btn-success" type="submit" value="Ingresar">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/happy.png" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="img/1.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<br>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
< script src = "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
integrity = "sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
crossorigin = "anonymous" >
</script>
<script src="<?php echo RUTA_URL; ?>/js/modulos/inicio.js"></script>


<!-- Fin del codigo del sitio -->
<?php require RUTA_APP . '/views/inc/footer.php' ;?>