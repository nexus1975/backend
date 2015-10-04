'use strict';

angular.module('Imageaday', []).
    controller('ImageCtrl', ['$scope','$http', function($scope, $http) {          
        $http({method: 'GET', url: 'http://image-a-day.herokuapp.com/image'}).
            success(function(data, status, headers, config) {
                  $scope.imagedata = data;    
            })/*.
            fail(function(data, status, headers, config) {
              alert("Ajax request failed. Try again.");
            })*/;   
    }]);