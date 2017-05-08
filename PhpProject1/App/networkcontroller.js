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

nc.viewProfile = viewProfile;

function viewProfile(item){
    DataService.setUserToView(item);
    $location.path('/userprofile');
}

var base_url = 'http://recruitchute.io/';

nc.favorite_ids = [];
nc.getFavoritedPlayers = getFavoritedPlayers;
getFavoritedPlayers();

nc.nofavs = true;
nc.favResults = false;

nc.noschoolfavs = true;
nc.favSchoolResults = false;

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
            for(var i=0; i<nc.favinfo.length; i++){
                if(nc.favinfo[i].Image == null){
                    nc.favinfo[i].Image = "http://recruitchute.io/Assets/images/soccer_player_icon.jpg";
                }
            }
            nc.favResults = true;
            nc.nofavs = false;
        }
        else{
            nc.nofavs = true;
        }
    },
    function(err) { console.log(err);
    });
}

nc.favorite_school_ids = [];
nc.getFavoritedSchools = getFavoritedSchools;
getFavoritedSchools();


function getFavoritedSchools(){
    // use $http service to obtain data
    $http.post('http://recruitchute.io/favorite/getfavoritedschools', nc.currentUser).then(function(response){
        if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
            // set current user
            nc.favorite_school_ids = response.data;
            getFavoritedSchoolsInfo();
        }
    },
    function(err) { console.log(err);
    });
}

nc.favschoolinfo = [];
nc.getFavoritedSchoolsInfo = getFavoritedSchoolsInfo;

function getFavoritedSchoolsInfo(){
    var data_object = {current_id : nc.currentUser, ids : nc.favorite_school_ids};
    $http.post('http://recruitchute.io/favorite/getfavoritedschoolinfo', data_object).then(function(response){
        if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
            // set current user
            nc.favschoolinfo = response.data;
            for(var i=0; i<nc.favschoolinfo.length; i++){
                if(nc.favschoolinfo[i].image == null){
                    nc.favschoolinfo[i].image = "http://recruitchute.io/Assets/images/School_icon.png";
                }
            }
            nc.favSchoolResults = true;
            nc.noschoolfavs = false;
        }
        else{
            nc.noschoolfavs = true;
        }
    },
    function(err) { console.log(err);
    });
}




}]);
myApp.filter('trustAsResourceUrl', ['$sce', function($sce) {
            return function(val) {
                return $sce.trustAsResourceUrl(val);
            };
        }])

