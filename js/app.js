var myApp = angular.module('myApp', [
	'ngRoute', 
	'eventControllers'
	]);

 myApp.config([ '$routeProvider', function($routeProvider){
 	$routeProvider.
 	when('/list', {
 		templateUrl: 'partial/list.html',
 		controller: 'ListController'
 	}).
 	when('/details/:itemId', {
 		templateUrl:'partial/details.html',
 		controller: 'DetailsController'
 	}).
 	otherwise({
 		redirectTo: '/list'
 	});
 }]);