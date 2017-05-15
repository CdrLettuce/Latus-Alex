'use strict'
myApp.controller('profileController',['$http', 'DataService','$location', function($http, DataService, $location){
    var cc = this;
    cc.currentUser = {};
    init();
    
    // boolean for ng-show player or team page
    cc.showPlayerProfile = false;
    cc.showCoachProfile = false;

    // Get the id of the profile that you want to view from the data service
    checkId();



function checkId(){
    console.log("Checking user role id");
    console.log(cc.currentUser.role_id);
    if(cc.currentUser.role_id == 2){
        console.log("In the if");
        cc.showCoachProfile = true;
        getCoachInfo();
    }else if(cc.currentUser.role_id == 1){
        console.log("In the else if");
        getPlayerInfo();
        console.log("Between the first get player info");
        getPlayerInfo2();
        getPlayerInfo3();
        getPlayerInfo4();
        cc.showPlayerProfile = true;
    }
}

    function init(){
        // obtain name form the data service
        cc.currentUser = DataService.getCurrentUser();
        if (cc.currentUser.user_id == -1){
            // Invalid user. Display login page
            $location.path('/login');
        }
    }

    var base_url = 'http://recruitchute.io/';
    cc.info = [];
    cc.getPlayerInfo = getPlayerInfo;

    function getPlayerInfo(){
        // use $http service to obtain data
        console.log("in the first player info, here is cc.currentuser:");
        console.log(cc.currentUser);
        $http.post('http://recruitchute.io/playerinfo/getPlayerInfo', cc.currentUser).then(function(response){
            if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
                // set current user 
                cc.info = response.data;
            }
        },
           function(err) { console.log(err);
        });
    }

    cc.info2 = [];
    cc.getPlayerInfo2 = getPlayerInfo2;
    
    function getPlayerInfo2(){
        // use $http service to obtain data
        $http.post('http://recruitchute.io/playerinfo/getPlayerInfo2', cc.currentUser).then(function(response){
            if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
                // set current user
                cc.info2 = response.data;
            }
        },
           function(err) { console.log(err);
        });        
    }
    
    cc.info3 = [];
    cc.getPlayerInfo3 = getPlayerInfo3;

    function getPlayerInfo3(){
        // use $http service to obtain data
        $http.post('http://recruitchute.io/playerinfo/getPlayerInfo3', cc.currentUser).then(function(response){
            if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
                // set current user
                cc.info3 = response.data;
            }
        },
        function(err) { console.log(err);
        });
    }

    cc.info4 = [];
    cc.getPlayerInfo4 = getPlayerInfo4;

    function getPlayerInfo4(){
        // use $http service to obtain data
        $http.post('http://recruitchute.io/playerinfo/getPlayerInfo4', cc.currentUser).then(function(response){
            if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
                // set current user
                cc.info4 = response.data;
            }
        },
        function(err) { console.log(err);
        });
    }
    
    cc.info5 = [];
    cc.getCoachInfo = getCoachInfo;

function getCoachInfo(){
    // use $http service to obtain data
    $http.post('http://recruitchute.io/playerinfo/getCoachInfo', cc.currentUser).then(function(response){
        if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
            // set current user
            cc.info5 = response.data;
            console.log("coach info:");
            console.log(cc.info5);
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

