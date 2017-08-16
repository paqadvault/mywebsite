var eventControllers = angular.module('eventControllers', []);

eventControllers.controller('ListController', ['$scope', '$http', function($scope, $http) {

$http.get('js/data.json').success(function(data){
$scope.paqadevent = data;
$scope.eventOrder = 'name';
}); 
}]);
eventControllers.controller('DetailsController', ['$scope', '$http', '$routeParams', function($scope, $http, $routeParams) {

$http.get('js/data.json').success(function(data){
$scope.paqadevent = data;
$scope.whichItem = $routeParams.itemId;
}); 
}]);