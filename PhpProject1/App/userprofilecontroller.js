'use strict'
myApp.controller('userprofileController',['$http', 'DataService','$location', function($http, DataService, $location){
var uc = this;
uc.currentUser = {};
init();

var base_url = 'http://recruitchute.io/';

function init(){
    // obtain name form the data service
    uc.currentUser = DataService.getCurrentUser();
    if (uc.currentUser.user_id == -1){
        // Invalid user. Display login page
        $location.path('/login');
    }
}

// Get the id of the profile that you want to view from the data service
uc.userProfileID = {};
getId();

function getId(){
    uc.userProfileID = DataService.getUserToView();
    console.log("heythere");
    console.log(uc.userProfileID);
    getPlayerInfo();
    getPlayerInfo2();
}


var base_url = 'http://recruitchute.io/';
uc.info = [];
uc.getPlayerInfo = getPlayerInfo;


function getPlayerInfo(){
    // use $http service to obtain data
    console.log("get info function being called");
    var data_object = {user_id : uc.userProfileID};
    $http.post(base_url + 'playerinfo/getPlayerInfo', data_object).then(function(response){
            if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
                // set current user                              
                console.log(response.data);
                uc.info = response.data;
            }
       },
       function(err) { console.log(err);
    });
}

uc.info2 = [];
uc.getPlayerInfo2 = getPlayerInfo2;

        
function getPlayerInfo2(){
    // use $http service to obtain data
    console.log("get info 2 function being called");
    var data_object = {user_id : uc.userProfileID};
    $http.post(base_url + 'playerinfo/getPlayerInfo2', data_object).then(function(response){
        console.log("here is the response data");
        console.log(response);
            if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
                // set current user
                console.log("Wassup");
                console.log(response.data);
                uc.info2 = response.data;
                console.log(uc.info);
             }
       },
       function(err) { console.log(err);
    });
}

}]);
