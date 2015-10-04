'use strict'; 

/**
 * @ngdoc service
 * @name testApp.testService
 * @description
 * # testService
 * Service in the testApp.
 */
angular.module('testApp.services', ['ngResource'])
    //Config constant
    .constant('config', { baseurl: '//localhost/laravelapp2/public/index.php/objects' } )

    //TestService
    .factory('TestService', function($http, config) {         
        return {
          getObjects: function() {
            return $http.get(config.baseurl).then(function(response) {
              return response.data;
            });
          },
          getObject: function(id) {
alert(id);            
            return $http.get(config.baseurl+'/'+id).then(function(response) {
              return response.data;
            });
          },
          saveObject: function(object) {
            return $http.put(config.baseurl+'/'+object.id, object).then(function(response) {
              return response.data;
            });
          },         
        };
    })
   .factory('ObjectService', function(config, $resource) {  
      return $resource(config.baseurl+'/:id', { id: '@id' }, {
        update: {
          method: 'PUT' // this method issues a PUT request
        }
      })
   });

                   