'use strict'
myApp.controller('userprofileController',['$http', 'DataService','$location', function($http, DataService, $location){
var uc = this;
uc.currentUser = {};
init();

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

function getId(){
    uc.userProfileID = DataService.getUserToView();
    console.log(uc.userProfileID);
}


var base_url = 'http://recruitchute.io/';
uc.info = [];
uc.getPlayerInfo = getPlayerInfo;
uc.getPlayerInfo();

        function getPlayerInfo(){
        // use $http service to obtain data
                $http.post(base_url + 'playerinfo/getPlayerInfo', uc.userProfileID).then(function(response){
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
        uc.getPlayerInfo2();
        
        function getPlayerInfo2(){
        // use $http service to obtain data
                $http.post(base_url + 'playerinfo/getPlayerInfo2', uc.userProfileID).then(function(response){
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

