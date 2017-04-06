'use strict'
myApp.controller('profileController',['$http', 'DataService','$location', function($http, DataService, $location){
  var cc = this;
 cc.currentUser = {};
        init();

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
cc.getPlayerInfo();

console.log("HEY");
function getPlayerInfo(){
        // use $http service to obtain data
                $http.post(base_url + 'playerinfo/getPlayerInfo', cc.currentUser).then(function(response){
                        if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
                                // set current user
                                console.log("Wassup");
                                console.log(response.data);
                                cc.info = response.data;
                                console.log(cc.info);
                         }
                   },
                   function(err) { console.log(err);
                });
        }


}]);

