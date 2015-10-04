'use strict';

/**
 * @ngdoc overview
 * @name testApp
 * @description
 * # testApp
 *
 * Main module of the application.
 */
angular
  .module('testApp', [
    'ui.router',
    'ngResource',
    'ngRoute',       
    'ngLoadingSpinner',
    'ui.bootstrap',
    'mgcrea.ngStrap',
    'Imageaday',
    'testApp.controllers',
    'testApp.services'
  ])
  .config(['usSpinnerConfigProvider', function (usSpinnerConfigProvider) {
      usSpinnerConfigProvider.setDefaults( {
            lines: 10, // The number of lines to draw
            length: 9, // The length of each line
            width: 10, // The line thickness
            radius: 21, // The radius of the inner circle
            corners: 1, // Corner roundness (0..1)
            rotate: 0, // The rotation offset
            direction: 1, // 1: clockwise, -1: counterclockwise
            color: 'lightblue', // #rgb or #rrggbb or array of colors
            speed: 1, // Rounds per second
            trail: 50, // Afterglow percentage
            shadow: false, // Whether to render a shadow
            hwaccel: false, // Whether to use hardware acceleration
            className: 'spinner', // The CSS class to assign to the spinner
            zIndex: 2e9, // The z-index (defaults to 2000000000)
            top: '150px', // Top position relative to parent
            left: '50%' // Left position relative to parent
          }
      );
  }])
  .config(function($stateProvider) {
    $stateProvider
    .state('objects', {
        url: '/objects',
        templateUrl: '../../public/packages/views/objects.html',
        controller: 'ObjectsCtrl'        
    })
    .state('viewObject', {
        url: '/objects/:id',
        templateUrl: '../../public/packages/views/object.html',
        controller: 'ObjectCtrl'       
    })
    .state('editObject', {
        url: '/objects/:id/edit',
        templateUrl: '../../public/packages/views/object.html',
        controller: 'ObjectCtrl'      
    });
})
.run(function($state) {
    $state.go('objects'); //make a transition to movies state when app starts
}); 
/*
  .config(function ($routeProvider) {
        $routeProvider
            .when('/', {
                templateUrl: '../../public/packages/views/hello.html',
                controller: 'HelloCtrl'
            })
            .when('/objects', {
                templateUrl: '../../public/packages/views/objects.html',
                controller: 'ObjectsCtrl'
            })
            .when('/objects/:id', {
                templateUrl: '../../public/packages/views/object.html',
                controller: 'ObjectCtrl'
            })
            .when('/objects/:id/edit', {
                templateUrl: '../../public/packages/views/object.html',
                controller: 'ObjectCtrl'
            })
            .otherwise({
                redirectTo: '/'
            });
  });*/
