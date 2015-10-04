'use strict';

/**
 * @ngdoc function
 * @name testApp.controllers
 * @description
 * # Controllers
 * Controllers of the testApp
 */
angular.module('testApp.controllers', ['testApp.services'])

    //ObjectsCtrl
    .controller('HelloCtrl', function ($scope) {
        $scope.hello = 'Objects World';
    })
    .controller('ObjectsCtrl', function ($scope, $location, ObjectService) {
        //get all Objects
        $scope.objects = ObjectService.query();
    })
   
    //ObjectCtrl
    .controller('ObjectCtrl', function ($scope, $log, $stateParams, ObjectService) {
        //get one Object
        $scope.object = ObjectService.get( {id:$stateParams.id} );

        //interactions
        $scope.saveObject = function() {       
            $scope.object.$update(function(response) {
                $scope.object = response;
            });
        }

        //--------------------
        //temp
        //http://mgcrea.github.io/angular-strap/#/navbar#tabs
        $scope.tabs = [
            {
              "title": "Home",
              "content": "Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica."
            },
            {
              "title": "Profile",
              "content": "Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee."
            },
            {
              "title": "About",
              "content": "Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade."
            }
        ];
        $scope.tabs.activeTab = 0;
        
        //
        $scope.panels = [
            {
              "title": "Collapsible Group Item #1",
              "body": "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch."
            },
            {
              "title": "Collapsible Group Item #2",
              "body": "Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee."
            },
            {
              "title": "Collapsible Group Item #3",
              "body": "Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade."
            }
        ];
        $scope.panels.activePanel = 0;
        
        //
        $scope.items = [
            'The first choice!',
            'And another choice for you.',
            'but wait! A third!'
          ];

          $scope.status = {
            isopen: false
          };

          $scope.toggled = function(open) {
            $log.log('Dropdown is now: ', open);
          };

          $scope.toggleDropdown = function($event) {
            $event.preventDefault();
            $event.stopPropagation();
            $scope.status.isopen = !$scope.status.isopen;
          };
          //--------------------

     });