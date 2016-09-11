
<?php
    session_start();
    unset($_SESSION['user']);
?>


<!DOCTYPE html>
<html ng-app="loginApp" ng-controller="mainCtrl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Facturación | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="AdminLTE.min.css">

    <script type="text/javascript" src="angular/lib/angular.min.js"></script>
    <script type="text/javascript" src="angular/app.js"></script>
    <script type="text/javascript" src="angular/servicios/login_service.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="hold-transition login-page">
    <div class="login-box">

        <div class="login-logo">
            <a href=""><b>Facturación</b>FAC</a>
        </div>
        <!-- /.login-logo -->

        <div class="login-box-body">

            <p class="login-box-msg">Iniciar sesión</p>

            <form name="forma" ng-submit="ingresar(datos)">

                <div class="form-group has-feedback">
                    <input type="text"
                            class="form-control"
                            placeholder="Usuario"
                            name="usuario"
                            required="required"
                            ng-model="datos.usuario">

                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback">
                    <input type="password"
                            class="form-control"
                            placeholder="Contraseña"
                            name="contrasena"
                            required="required"
                            ng-model="datos.contrasena">

                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit"
                                class="btn btn-primary btn-block btn-flat"
                                ng-disabled="forma.$invalid || cargando">
                                Entrar
                        </button>
                    </div>
                </div>

                <div class="row" ng-show="invalido">
                    <div class="col-md-12">
                        <br>
                        <div class="alert alert-danger">
                            <strong>Verificar datos</strong>
                            {{ mensaje }}
                        </div>

                    </div>
                </div>

            </form>


        </div>
                <!-- /.login-box-body -->
    </div>

</body>
</html>
