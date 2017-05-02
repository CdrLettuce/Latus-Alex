'use strict'
myApp.controller('networkController',['$http', 'DataService','$location', function($http, DataService, $location){

var nc = this;
nc.currentUser = {};
                
init();

function init(){
    // obtain name form the data service
    nc.currentUser = DataService.getCurrentUser();
    if (nc.currentUser.user_id == -1){
        // Invalid user. Display login page
        $location.path('/login');
    }
}

var base_url = 'http://recruitchute.io/';

nc.favinfo = [];
nc.getFavoritedPlayers = getFavoritedPlayers;

function getFavoritedPlayers(){
    // use $http service to obtain data
    $http.post('http://recruitchute.io/favorite/getfavoritedplayers', nc.currentUser).then(function(response){
        if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
            // set current user
            nc.favinfo = response.data;
        }
    },
    function(err) { console.log(err);
    });
}


}]);

