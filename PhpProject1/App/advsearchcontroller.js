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
        
ac.advsearchForPlayer = advsearchForPlayer;
ac.players = [];
ac.displaySearchResults = false;
ac.noResults = false;

function advsearchForPlayer(item){
    console.log("item:");
    console.log(item);
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
    console.log("Data object:");
    console.log(data_object);
    $http.post('http://recruitchute.io/search/advsearchPlayer', data_object ).then(function(response){
            console.log(response);
            ac.players = response.data;
            if(response.data != -1){
               ac.displaySearchResults = true;
               ac.noResults = false;
            }
            if(response.data == '-1'){
                ac.noResults = true;
                ac.displaySearchResults = false;
            }
                
            
    },
    function(err) { console.log(err);
    });
      
}

ac.viewProfile = viewProfile;

function viewProfile(item){
    console.log("View profile being called");
    console.log(item);
    DataService.setUserToView(item);
    $location.path('/userprofile');
}

ac.favoritePlayer = favoritePlayer;

function favoritePlayer(item){
    
    var data_object = {current_user : ac.currentUser.user_id, followed_id : item};
    console.log("data_object");
    console.log(data_object);
    $http.post('http://recruitchute.io/favorite/favoritePlayer', data_object ).then(function(response){
        console.log(response);
        getFavoritedPlayers();
    },
    function(err) { console.log(err);
    });   
}

ac.favinfo = [];
ac.getFavoritedPlayers = getFavoritedPlayers;
getFavoritedPlayers();

function getFavoritedPlayers(){
    // use $http service to obtain data
    $http.post('http://recruitchute.io/favorite/getfavoritedplayers', ac.currentUser).then(function(response){
        if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
            // set current user
            ac.favinfo = response.data;
            console.log("returned list of players that the user has favorited");
            console.log(ac.favinfo);
        }
    },
    function(err) { console.log(err);
    });
}

function getFavoritedPlayersInfo(){
    var favorites = ac.favinfo;
    $http.post('http://recruitchute.io/favorite/getfavoritedplayersinfo', ac.currentUser).then(function(response){
        if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
            // set current user
            ac.favinfo = response.data;
            console.log("returned list of players that the user has favorited");
            console.log(ac.favinfo);
        }
    },
    function(err) { console.log(err);
    });
}



}]);

