 <?php
  session_start();
 if (!isset($_SESSION['login'])) {
     redireccionar('/Home');
 } else {
     ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="ie=edge" />
     <title><?= NAME_APP . ' Version: ' . VERSION_APP; ?></title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
         integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

     <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css" />
     <link rel="stylesheet" type="text/css"
         href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-html5-1.6.1/datatables.min.css" />
     <link rel="stylesheet" href="<?php echo RUTA_URL; ?>/css/AdminLTE.min.css">
     <link rel="stylesheet" href="<?php echo RUTA_URL; ?>/css/skin-blue.min.css">
     <link rel="stylesheet" href="<?php echo RUTA_URL; ?>/css/styles.css">
     <link rel="shortcut icon" href="<?= RUTA_URL;?>/img/iconoareandina.ico"/>
     <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<style> 
table th{
  background: #;
  color: black;
}
table td{
  background: #F0F0EA;
}
</style>
 </head>
 <body class="hold-transition skin-blue sidebar-mini">
     <div class="wrapper">

         <!-- Main Header -->
         <header class="main-header">

             <!-- Logo -->
             <a href="<?php echo RUTA_URL . '/admin' ?>" class="logo">
                 <!-- mini logo for sidebar mini 50x50 pixels -->
                 <span class="logo-mini"><i class="icon-th-large"></i></span>
                 <!-- logo for regular state and mobile devices -->
                 <span class="text-center text-light badge badge-dark"">Inventario <span class="badge badge-success">Nacional</span></span>
             </a>

             <!-- Header Navbar -->
             <nav class="navbar navbar-static-top" role="navigation">
                 <!-- Sidebar toggle button-->
                 <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                     <span class="sr-only">Toggle navigation</span>
                 </a>   

                 <div class="navbar-custom-menu">
                     <ul class="nav navbar-nav">

                         <li class="dropdown user user-menu">
                             <!-- Menu Toggle Button -->
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                 <?php
                               
                                 echo $_SESSION['login'] ; ?>
                             </a>
                             <ul class="dropdown-menu">
                                 <!-- The user image in the menu -->
                                 <li class="user-header">
                                     <!--  <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">  -->
                                     <p class="badge-dark">
                                     <img src="<?php echo RUTA_URL . '/public/imgs/avatar5.1.jpg' ?>" class="img img-circle"
                             alt="User Image"> 
                                         <?php
                                        echo $_SESSION['nombre'].' '.$_SESSION['apellido'].'<br>';?>
                                     </p>
                                 </li>
                                 <!-- Menu Footer-->
                                 <li class="user-footer">
                                     <div class="pull-right">
                                         <a href="<?php echo RUTA_URL . '/Admin/cerrarSesion' ?>"
                                             class="btn btn-danger">Cerrar <span class="badge-warning">Sesión</span>
                                         </a>
                                     </div>
                                 </li>
                             </ul>
                         </li>
                     </ul>
                 </div>





             </nav>
         </header>


         <!-- *****************************    MENU LATERAL  *************************** -->
         <aside class="main-sidebar">
             <!-- sidebar: style can be found in sidebar.less -->
             <section class="sidebar">
                 <!-- Sidebar user panel (optional) -->
                 <div class="user-panel">
                     <div class="pull-left image text-white">
                         <img src="<?php echo RUTA_URL . '/public/imgs/avatar5.png' ?>" class="img-circle"
                             alt="User Image">   
                             <?php
                                echo $_SESSION['nombre'];
                             ?>
                     </div>

                 </div>



                 <ul class="sidebar-menu" data-widget="tree">
                     <li class="header text-center">--------------MENU-PRINCIPAL---------------</li>
                     <!-- Optionally, you can add icons to the links -->
                     <li class="item">
                         <a href="<?php echo RUTA_URL . '/Admin' ?>">
                             <i class="icon-home"></i>
                             <span>Inicio</span></a>
                     </li>
                     <li class="item">
                         <a href="<?php echo RUTA_URL . '/equipo' ?>">
                             <i class="icon-laptop"></i>
                             <span>Equipos</span></a>
                     </li>
                     <li class="item">
                         <a href="<?php echo RUTA_URL . '/Monitores' ?>">
                             <i class="icon-male"></i>
                             <span>Monitores</span></a>
                     </li>
                     <li class="item">
                         <a href="<?php echo RUTA_URL . '/Usuario' ?>">
                             <i class="icon-group"></i>
                             <span>Usuarios</span></a>
                     </li>
                 </ul>
                 <!-- /.sidebar-menu -->
             </section>
             <!-- /.sidebar -->
         </aside>
         <?php
 }
    ?>