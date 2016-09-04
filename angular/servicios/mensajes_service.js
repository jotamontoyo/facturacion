
    var app = angular.module('facturacionApp.mensajes', []);

    app.factory('Mensajes', ['$http', '$q', function($http, $q) {

        var self = {

            mensajes: [{

                img: 'dist/img/user2-160x160.jpg',
                nombre: 'Jota Montoyo',
                mensaje: 'Bienvenido a nuestro servicio de facturación',
                fecha: '28.08.2016'
            },
            {
                img: 'dist/img/user2-160x160.jpg',
                nombre: 'Paco Soria',
                mensaje: 'Bienvenido a nuestro servicio de facturación',
                fecha: '25.03.2016'
            },
            {
                img: 'dist/img/user2-160x160.jpg',
                nombre: 'Maria Jiménez',
                mensaje: 'Bienvenido a nuestro servicio de facturación',
                fecha: '15.06.2016'
            }]


        };


        return self;
    }]);
