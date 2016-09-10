
    var app = angular.module('facturacionApp', [
        'ngRoute', 'jcs-autoValidate',
        'facturacionApp.configuracion',
        'facturacionApp.mensajes',
        'facturacionApp.notificaciones',
        'facturacionApp.clientes',
        'facturacionApp.dashboardCtrl',
        'facturacionApp.clientesCtrl'
    ]);


    angular.module('jcs-autoValidate')
    .run([
        'defaultErrorMessageResolver',
        function (defaultErrorMessageResolver) {
            // To change the root resource file path
            defaultErrorMessageResolver.setI18nFileRootPath('angular/lib');
            defaultErrorMessageResolver.setCulture('es-co');
        }
    ]);



    app.controller('mainCtrl', ['$scope', 'Configuracion', 'Mensajes', 'Notificaciones', 'Clientes', function($scope, Configuracion, Mensajes, Notificaciones, Clientes) {


        $scope.mensajes = Mensajes.mensajes;
        $scope.notificaciones = Notificaciones.notificaciones;
        $scope.usuario = {
            nombre: "Jota"
        };

        $scope.config = {};
        Configuracion.cargar().then(function() {            // servicio Configuracion. Despues de la promesa cargar() ejecuta .then
            $scope.config = Configuracion.config;           // con esto se carga el fichero de configuracion
        });

        /* FUNCIONES GLOBALES ==================================  */
        $scope.activar = function(menu, submenu, titulo, subtitulo) {        // resalta la opcion activa del menu y captura valores de titulo y subtitulo

            $scope.titulo = titulo;
            $scope.subtitulo = subtitulo;

            $scope.mDashboard = "";
            $scope.mClientes = "";
            $scope[menu] = 'active';
        };


    }]);


    // ===================================================================== //
    // Rutas =============================================================== //
    // ===================================================================== //
    app.config(['$routeProvider', function($routeProvider) {            // informa de la ruta al breadcrumb del dashboard.html

        $routeProvider
            .when('/', {
                templateUrl: 'dashboard/dashboard.html',
                controller: 'dashboardCtrl'
            })
            .when('/clientes/:pag', {
                templateUrl: 'clientes/clientes.html',
                controller: 'clientesCtrl'
            })
            .otherwise({
                redirectTo: '/'
            })

    }]);


    // ===================================================================== //
    // Filtros ============================================================= //
    // ===================================================================== //
    app

    .filter('quitarletra', function() {
        return function(palabra) {
            if (palabra) {
                if (palabra.length > 1) {
                    return palabra.substr(1);
                } else {
                    return palabra;
                };
            };
        };
    })

    .filter('mensajecorto', function() {
        return function(mensaje) {
            if (mensaje) {
                if (mensaje.length > 35) {
                    return mensaje.substr(0, 35) + "...";
                } else {
                    return mensaje;
                };
            };
        };
    })
