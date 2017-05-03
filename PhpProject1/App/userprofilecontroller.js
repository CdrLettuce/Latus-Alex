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

function favoritePlayer(item){
    
    var data_object = {current_user : uc.currentUser.user_id, followed_id : item};
    console.log("data_object");
    console.log(data_object);
    $http.post('http://recruitchute.io/favorite/favoritePlayer', data_object ).then(function(response){
        console.log(response);
        getFavoritedPlayers();
    },
    function(err) { console.log(err);
    });   
}

uc.showMessageContainer = showMessageContainer;

function showMessageContainer(){ 
    console.log("WHUT UPP");
    // Get the modal
    var modal = $('#myModal');

    // Get the button that opens the modal
    var btn = $("#msgbtn");

    // Get the <span> element that closes the modal
    var span = $(".close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
}

}]);
myApp.filter('trustAsResourceUrl', ['$sce', function($sce) {
            return function(val) {
                return $sce.trustAsResourceUrl(val);
            };
        }])

