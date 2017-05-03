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

nc.favorite_ids = [];
nc.getFavoritedPlayers = getFavoritedPlayers;
getFavoritedPlayers();

nc.nofavs = false;
nc.favResults = false;

function getFavoritedPlayers(){
    // use $http service to obtain data
    $http.post('http://recruitchute.io/favorite/getfavoritedplayers', nc.currentUser).then(function(response){
        if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
            // set current user
            nc.favorite_ids = response.data;
            getFavoritedPlayersInfo();
        }
    },
    function(err) { console.log(err);
    });
}

nc.favinfo = [];
nc.getFavoritedPlayersInfo = getFavoritedPlayersInfo;

function getFavoritedPlayersInfo(){
    var data_object = {current_id : nc.currentUser, ids : nc.favorite_ids};
    $http.post('http://recruitchute.io/favorite/getfavoritedplayersinfo', data_object).then(function(response){
        if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
            // set current user
            nc.favinfo = response.data;
            console.log("favorited player info:");
            console.log(nc.favinfo);
            nc.favResults = true;
        }
        else{
            nc.nofavs = true;
        }
    },
    function(err) { console.log(err);
    });
}


}]);

