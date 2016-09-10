
    var app = angular.module('facturacionApp.dashboardCtrl', []);

    app.controller('dashboardCtrl', ['$scope', function($scope) {

            $scope.activar('mDashboard', '', 'Dashboard', 'información general');     // le pasa a la funcion activar() de app.js el parametro 'mDashboard', titulo y subtitulo

    }]);
