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
    getPlayerInfo();
    getPlayerInfo2();
}


var base_url = 'http://recruitchute.io/';
uc.info = [];
uc.getPlayerInfo = getPlayerInfo;


function getPlayerInfo(){
    // use $http service to obtain data
    var data_object = {user_id : uc.userProfileID};
    $http.post(base_url + 'playerinfo/getPlayerInfo', data_object).then(function(response){
            if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
                // set current user
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
    var data_object = {user_id : uc.userProfileID};
    $http.post(base_url + 'playerinfo/getPlayerInfo2', data_object).then(function(response){
            if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
                // set current user
                uc.info2 = response.data;
             }
       },
       function(err) { console.log(err);
    });
}

uc.info3 = [];
uc.getPlayerInfo3 = getPlayerInfo3;
uc.getPlayerInfo3();

function getPlayerInfo3(){
    // use $http service to obtain data
    $http.post('http://recruitchute.io/playerinfo/getPlayerInfo3', uc.currentUser).then(function(response){
        if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
            // set current user
            uc.info3 = response.data;
        }
    },
    function(err) { console.log(err);
    });
}

uc.info4 = [];
uc.getPlayerInfo4 = getPlayerInfo4;
uc.getPlayerInfo4();

function getPlayerInfo4(){
    // use $http service to obtain data
    $http.post('http://recruitchute.io/playerinfo/getPlayerInfo4', uc.currentUser).then(function(response){
        if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
            // set current user
            uc.info4 = response.data;
        }
    },
    function(err) { console.log(err);
    });
}

uc.favoritePlayer = favoritePlayer;

function favoritePlayer(item){
    var data_object = {current_user : uc.currentUser.user_id, followed_id : item};
    $http.post('http://recruitchute.io/favorite/favoritePlayer', data_object ).then(function(response){
    },
    function(err) { console.log(err);
    });   
}

uc.showMessageContainer = showMessageContainer;

function showMessageContainer(){ 
    $(window).click(function(e) {
    if(e.target.id === "myModal"){
		if($("#comment").val() !== ""){
			$("#comment").val("");
		}
		$('#myModal').css('display', 'none');
	}
    });
    $('#myModal').css('display', 'block');

    // When the user clicks on <span> (x), close the modal
    $(".close").click(function() {
            $('#myModal').css('display', 'none');
    });
}

uc.sendMessage = sendMessage;

function sendMessage(item){
    var data_object = {sender_id : uc.currentUser.user_id, receiver_id : uc.info.user_id, message : item, sender_fname : uc.currentUser.first_name, sender_lname : uc.currentUser.last_name, receiver_fname : uc.info.first_name, receiver_lname : uc.info.last_name };
    // use $http service to obtain data
    $http.post('http://recruitchute.io/messages/sendMessage', data_object).then(function(response){
        if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
            
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

