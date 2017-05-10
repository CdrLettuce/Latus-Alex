'use strict'
myApp.controller('advsearchController',['$http', 'DataService','$location', function($http, DataService, $location){

var ac = this;
ac.currentUser = {};
                
init();

function init(){
    // obtain name form the data service
    ac.currentUser = DataService.getCurrentUser();
    if (ac.currentUser.user_id == -1){
        // Invalid user. Display login page
        $location.path('/login');
    }
}

var base_url = 'http://recruitchute.io/';

ac.item =  {searchfirst : "", searchlast : "", position : "", gradYear : "", state : "", gender : ""};
ac.item2 =  {school : "", state : "", division : ""};
        
ac.advsearchForPlayer = advsearchForPlayer;
ac.advsearchForCoach = advsearchForCoach;
ac.players = [];
ac.coaches = [];
ac.displayPlayerSearchResults = false;
ac.noPlayerResults = false;
ac.displayCoachSearchResults = false;
ac.noCoachResults = false;
ac.playerSearchInputs = true;
ac.schoolSearchInputs = false;


ac.showPlayerSearch = showPlayerSearch;

function showPlayerSearch(){
    ac.playerSearchInputs = true;
    ac.schoolSearchInputs = false;
    
    ac.displayCoachSearchResults = false;
    ac.noCoachResults = false;
}

ac.showCollegeSearch = showCollegeSearch;

function showCollegeSearch(){
    ac.schoolSearchInputs = true;
    ac.playerSearchInputs = false;
    
    ac.displayPlayerSearchResults = false;
    ac.noPlayerResults = false;
}


function advsearchForPlayer(item){

    if(!item.searchfirst){
        item.searchfirst = "";
    }
    if(!item.searchlast){
        item.searchlast = "";
    }
    if(!item.position){
        item.position = "";
    }
    if(!item.gradYear){
        item.gradYear = "";
    }
    if(!item.state){
        item.state = "";
    }
    if(!item.gender){
        item.gender = "";
    }
    var data_object = {firstname : item.searchfirst, lastname : item.searchlast, position : item.position, 
                        gradYear : item.gradYear, state : item.state, gender : item.gender};
    $http.post('http://recruitchute.io/search/advsearchPlayer', data_object ).then(function(response){
            ac.players = response.data;
            for(var i=0; i<ac.players.length; i++){
                if(ac.players[i].Image === null){
                    ac.players[i].Image = "http://recruitchute.io/Assets/images/soccer_player_icon.jpg";
                }
            }           
            if(response.data != -1){
               ac.displayPlayerSearchResults = true;
               ac.noPlayerResults = false;
            }
            if(response.data == '-1'){
                ac.noPlayerResults = true;
                ac.displayPlayerSearchResults = false;
            }           
    },
    function(err) { console.log(err);
    });     
}


function advsearchForCoach(item2){
    if(!item2.school){
        item2.school = "";
    }
    if(!item2.state){
        item2.state = "";
    }
    if(!item2.division){
        item2.division = "";
    }
    var data_object = {school : item2.school, state : item2.state, division : item2.division};
    $http.post('http://recruitchute.io/search/advsearchCoach', data_object ).then(function(response){
            ac.coaches = response.data;
            for(var i=0; i<ac.coaches.length; i++){
                if(ac.coaches[i].image == null){
                    ac.coaches[i].image = "http://recruitchute.io/Assets/images/soccer_player_icon.jpg";
                }
            }           
            if(response.data != -1){
               ac.displayCoachSearchResults = true;
               ac.noCoachResults = false;
            }
            if(response.data == '-1'){
                ac.noCoachResults = true;
                ac.displayCoachSearchResults = false;
            }         
    },
    function(err) { console.log(err);
    });
      
}

ac.viewProfile = viewProfile;

function viewProfile(item){
    console.log("in view profile, here is the item");
    console.log(item);
    DataService.setUserToView(item);
    $location.path('/userprofile');
}

ac.favoriteSchool = favoriteSchool;

function favoriteSchool(item){  
    var data_object = {current_user : ac.currentUser.user_id, followed_id : item};
    $http.post('http://recruitchute.io/favorite/favoriteSchool', data_object ).then(function(response){
        getFavoritedPlayers();
    },
    function(err) { console.log(err);
    });   
}

ac.favoritePlayer = favoritePlayer;

function favoritePlayer(item){  
    var data_object = {current_user : ac.currentUser.user_id, followed_id : item};
    $http.post('http://recruitchute.io/favorite/favoritePlayer', data_object ).then(function(response){
        getFavoritedPlayers();
    },
    function(err) { console.log(err);
    });   
}

ac.favorite_ids = [];
ac.getFavoritedPlayers = getFavoritedPlayers;
getFavoritedPlayers();

function getFavoritedPlayers(){
    // use $http service to obtain data
    $http.post('http://recruitchute.io/favorite/getfavoritedplayers', ac.currentUser).then(function(response){
        if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
            // set current user
            ac.favorite_ids = response.data;
            getFavoritedPlayersInfo();
        }
    },
    function(err) { console.log(err);
    });
}

ac.favinfo = [];
ac.getFavoritedPlayersInfo = getFavoritedPlayersInfo;

function getFavoritedPlayersInfo(){
    var data_object = {current_id : ac.currentUser, ids : ac.favorite_ids};
    $http.post('http://recruitchute.io/favorite/getfavoritedplayersinfo', data_object).then(function(response){
        if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
            // set current user
            ac.favinfo = response.data;
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
