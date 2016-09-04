
    var app = angular.module('facturacionApp.clientesCtrl', []);

    app.controller('clientesCtrl', ['$scope', '$routeParams', 'Clientes', function($scope, $routeParams, Clientes) {

        var pag = $routeParams.pag;

        $scope.activar('mClientes', '', 'Clientes', 'Listado');             // le pasa a la funcion activar() de app.js: 'mClientes', '',  titulo y subtitulo de cabecera pagina
        $scope.clientes = {};
        $scope.clienteSel = {};


        $scope.moverA = function(pag) {
            Clientes.cargarPagina( pag ).then(function() {                  // promesa
                $scope.clientes = Clientes;                                 // se le pasa todo el contexto de Clientes a un objeto scope para manejarlo en html
            });
        };

        $scope.moverA(pag);


        // ====================================================== //
        //  Guardar cliente ===================================== //
        // ====================================================== //

        $scope.guardar = function(cliente) {


            Clientes.guardar(cliente).then(function() {


            });



        };




        // ====================================================== //
        //  Mostar modal ======================================== //
        // ====================================================== //

        $scope.mostarModal = function(cliente) {
            angular.copy(cliente, $scope.clienteSel);                   // clona
            $('#modal_cliente').modal();
        };


    }]);
