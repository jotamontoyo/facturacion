<?php
    session_start();

    if (!isset($_SESSION['user'])) {
        echo "Acceso denegado";
        die;
    }
    
?>


<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html ng-app="facturacionApp" ng-controller="mainCtrl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema de {{ config.nombre }}</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="dist/css/skins/skin-purple.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!-- Estilos personalizados-->
    <link rel="stylesheet" href="dist/css/animate.css">


    <!-- Importaciones de angular -->
    <script src="angular/lib/angular.min.js"></script>
    <script src="angular/lib/angular-route.min.js"></script>
    <script src="angular/lib/jcs-auto-validate.min.js"></script>


    <!-- Controladores -->
    <script src="angular/app.js"></script>
    <script src="angular/controladores/dashboardCtrl.js"></script>
    <script src="angular/controladores/clientesCtrl.js"></script>



    <!-- Servicios -->
    <script src="angular/servicios/configuracion_service.js"></script>
    <script src="angular/servicios/mensajes_service.js"></script>
    <script src="angular/servicios/notificaciones_service.js"></script>
    <script src="angular/servicios/clientes_service.js"></script>





</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect

| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |

|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |

-->
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">

    <header class="main-header">                                    <!-- Main Header -->

        <a href="index2.html" class="logo">                         <!-- Logo -->
            <span class="logo-mini"><b>{{ config.iniciales[0] }}</b>{{ config.iniciales | quitarletra }}</span>                 <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-lg"><b>{{ config.nombre }} </b>{{ config.iniciales }}</span>                                      <!-- logo for regular state and mobile devices -->
        </a>


        <nav class="navbar navbar-static-top" role="navigation">                            <!-- Header Navbar -->

            <a href="" class="sidebar-toggle" data-toggle="offcanvas" role="button">       <!-- Sidebar toggle button-->
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">                                                <!-- Navbar Right Menu -->
                <ul class="nav navbar-nav">
                    <li class="dropdown messages-menu"
                        ng-include src="'template/mensajes.html'">                          <!-- Messages: style can be found in dropdown.less-->
                    </li>
                    <li class="dropdown notifications-menu"
                        ng-include src="'template/notificaciones.html'">                      <!-- Notifications Menu -->
                    </li>
                    <li class="dropdown user user-menu"
                        ng-include src="'template/usuario.html'">                             <!-- User Account Menu -->
                    </li>
                </ul>
            </div>

        </nav>

    </header>

    <aside class="main-sidebar"
        ng-include src="'template/menu.html'">                   <!-- Left side column. contains the logo and sidebar -->
    </aside>




    <div class="content-wrapper">           <!-- Content Wrapper. Contains page content -->
        <section class="content-header">    <!-- Content Header (Page header) -->
            <h1>
                {{ titulo }}                        <!-- titulo y subtitulo vienen de los valores fijados en cada controller -->
                <small>{{ subtitulo }}</small>
            </h1>
        </section>
        <section class="content" ng-view>   <!-- Main content -->
            <!-- Your Page Content Here -->
        </section>
    </div>  <!-- /.content-wrapper -->





    <!-- Main Footer -->
    <footer class="main-footer">

        <!-- To the right -->
        <div class="pull-right hidden-xs">
            {{ config.version }}
        </div>

        <!-- Default to the left -->
        <strong>Copyright &copy; {{ config.anyo }}
            <a href="{{ config.web }}" target="blank">Compañía</a>.
        </strong> Derechos reservados.

    </footer>


</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
