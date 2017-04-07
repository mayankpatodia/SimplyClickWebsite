var id=window.location.href.split('?id=')[1];
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http, $window) {
    $scope.redirect_cat=function(x){
        $window.location.href='view_websites.html?id='+(x+1);
    }
    $http.get("phpfiles/load_cat.php?id="+id.toString())
    .then(function(response) {
        //First function handles success
        $scope.cat_arr = response.data;
    }, function(response) {
        //Second function handles error
        $scope.cat_arr = "Something went wrong";
    });
    $http.get("phpfiles/load_theme.php?id="+id.toString())
    .then(function(response2) {
        //First function handles success
        $scope.theme_arr = response2.data;
    }, function(response2) {
        //Second function handles error
        $scope.theme_arr = "Something went wrong";
    });
});