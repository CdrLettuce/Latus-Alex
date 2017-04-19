'use strict'
myApp.controller('homeController',['$http', 'DataService', '$location', function($http, DataService, $location){
  var hc = this;
 hc.currentUser = {};

        init();

        function init(){
                // obtain name form the data service
                hc.currentUser = DataService.getCurrentUser();
                if (hc.currentUser.user_id == -1){
                        // Invalid user. Display login page
                        $location.path('/login');
                }
        }
hc.item =  {};
hc.addPlayerInfo = addPlayerInfo;

        function addPlayerInfo(item){
                
                console.log("add player info is being called");
                console.log(item);
		var currentUser = hc.currentUser;
		// var quan = pc.quantity.quantity;
		var data_object = {userID : currentUser.user_id, position1 : item.position1, position2 : item.position2,
                                    position3 : item.position3, bio : item.bio, height : item.height, weight : item.weight,
                                    school : item.school, gpa : item.gpa, grad : item.grad, videourl : item.video,
                                    birth : item.birth, feet : item.feet, inches : item.inches, bench : item.bench,
                                    squat : item.squat, mile : item.mile, yard : item.yard}; 
                console.log(data_object);
		$http.post('http://recruitchute.io/profileupdate/updateProfile', data_object ).then(function(response){
			hc.success_message = "Thank you " + hc.currentUser.first_name + ", your profile has been updated.";
			hc.displaySuccessMessage=true;
		},
		function(err) { console.log(err);
		});	
	}
        
hc.searchForPlayer = searchForPlayer;
hc.players = [];
hc.displaySearchResults = false;

function searchForPlayer(item){
    console.log("function is being called");
    console.log(item);
    var data_object = {firstname : item.searchfirst, lastname: item.searchlast};
    $http.post('http://recruitchute.io/search/searchPlayer', data_object ).then(function(response){
            console.log(response);
            hc.players = response.data;
            hc.displaySearchResults = true;
            
    },
    function(err) { console.log(err);
    });
      
}


hc.info2 = [];
hc.getPlayerInfo2 = getPlayerInfo2;
hc.getPlayerInfo2();
var base_url = 'http://recruitchute.io/';

function getPlayerInfo2(){
// use $http service to obtain data
        $http.post('http://recruitchute.io/playerinfo/getPlayerInfo2', hc.currentUser).then(function(response){
                if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
                        // set current user
                        console.log("Wassup");
                        console.log(response.data);
                        hc.info2 = response.data;
                        console.log(hc.info2);
                 }
           },
           function(err) { console.log(err);
        });
}

}]);
