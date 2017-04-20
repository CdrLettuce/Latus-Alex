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


}]);

