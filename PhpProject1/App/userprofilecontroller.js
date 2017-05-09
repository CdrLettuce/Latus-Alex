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
    if(uc.userProfileID.role_id == 2){
        getCoachInfo();
    }else{
        getPlayerInfo();
        getPlayerInfo2();
        getPlayerInfo3();
        getPlayerInfo4();
    }
}


var base_url = 'http://recruitchute.io/';
uc.info = [];
uc.getPlayerInfo = getPlayerInfo;


function getPlayerInfo(){
    // use $http service to obtain data
    var data_object = {user_id : uc.userProfileID.user_id};
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
    var data_object = {user_id : uc.userProfileID.user_id};
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


function getPlayerInfo3(){
    // use $http service to obtain data
    $http.post('http://recruitchute.io/playerinfo/getPlayerInfo3', uc.userProfileID).then(function(response){
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

function getPlayerInfo4(){
    // use $http service to obtain data
    $http.post('http://recruitchute.io/playerinfo/getPlayerInfo4', uc.userProfileID).then(function(response){
        if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
            // set current user
            uc.info4 = response.data;
        }
    },
    function(err) { console.log(err);
    });
}

uc.info5 = [];
uc.getCoachInfo = getCoachInfo;

function getCoachInfo(){

    // use $http service to obtain data
    $http.post('http://recruitchute.io/playerinfo/getCoachInfo', uc.userProfileID).then(function(response){
        if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
            // set current user
            uc.info5 = response.data;
            console.log("coach info:");
            console.log(uc.info5);
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
		if($("#comment").val() !== "" || $("#msubject").val() !== ""){
			$("#comment").val("");
			$("#msubject").val("");
		}
		$('#myModal').css('display', 'none');
	}
    });
    $('#myModal').css('display', 'block');

    // When the user clicks on <span> (x), close the modal
    $(".close").click(function() {
            $('#myModal').css('display', 'none');
            $('#modalConfirm').css('display', 'none');
    });
}

uc.sendMessage = sendMessage;

function sendMessage(input_message, input_subject){
    var data_object = {sender_id : uc.currentUser.user_id, receiver_id : uc.info.user_id, message : input_message, subject : input_subject};
    // use $http service to obtain data
    $http.post('http://recruitchute.io/messages/sendMessage', data_object).then(function(response){
        if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
            
        }

    },
    function(err) { console.log(err);
    });
    $('#myModal').css('display', 'none');	
    $('#modalConfirm').css('display', 'block');  
}

}]);
myApp.filter('trustAsResourceUrl', ['$sce', function($sce) {
            return function(val) {
                return $sce.trustAsResourceUrl(val);
            };
        }])

