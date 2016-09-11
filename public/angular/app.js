
    var app = angular.module('loginApp', ['login.loginService']);


    app.controller('mainCtrl', ['$scope', 'LoginService', function($scope, LoginService) {

        $scope.invalido = false;
        $scope.cargando = false;
        $scope.mensaje  = "";

        $scope.datos = {};

        $scope.ingresar = function(datos) {

            if (datos.usuario.lenght < 3) {
                $scope.invalido = true;
                $scope.mensaje = "Introduza un nombre de usuario";
                return;
            } else if (datos.usuario.contrasena < 3) {
                $scope.invalido = true;
                $scope.mensaje = "Introduza una contraseña";
                return;
            };

            $scope.invalido = false;
            $scope.cargando = true;

            LoginService.login(datos).then(function(data) {         // llamada a servicio LoginService
                if (data.err) {
                    $scope.invalido = true;
                    $scope.cargando = false;
                    $scope.mensaje = data.mensaje;
                } else {
                    window.location = data.url;
                };
            });

        };

    }]);
