var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {
  $http.get("user_list.php")
  .then(function (response) {$scope.names = response.data;});
});