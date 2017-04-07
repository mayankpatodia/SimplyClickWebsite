var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http, $window) {
    $scope.redirect_cat=function(x){
        $window.location.href='view_websites.html?id='+x;
    }
    $http.get("phpfiles/load_cat.php")
    .then(function(response) {
        //First function handles success
        $scope.cat_arr = response.data;
    }, function(response) {
        //Second function handles error
        $scope.cat_arr = "Something went wrong";
    });
});