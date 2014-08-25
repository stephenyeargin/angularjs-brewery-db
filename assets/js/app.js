(function(){

  var app = angular.module('MyApp', []);

  app.controller('AppController', ['$http', function($http){
    var self = this;
    self.beer = {};
    var randomUrl = 'random.php';
    $http.get(randomUrl).success(function(response){
      self.beer = response.data;
    });
  }]);

})();