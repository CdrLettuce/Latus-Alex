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

cc.info = [];
cc.getPlayerInfo = getPlayerInfo;
cc.getPlayerInfo();

function getPlayerInfo(){
        var userID = cc.currentUser.user_id;
        console.log("HEY THERE HOWS IT GOIN?");
        console.log(userID);
      // use $http service to obtain data
        $http.get('http://recruitchute.io/playerinfo/getPlayerInfo/'+userID ).then(function(response){
                console.log(response.data);
                cc.info = response.data;
        },
                function(err) { console.log(err);
        });
}



}]);

