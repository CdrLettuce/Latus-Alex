'use strict'
myApp.controller('messagesController',['$http', 'DataService','$location', function($http, DataService, $location){

var nc = this;
nc.currentUser = {};
                
init();

function init(){
    // obtain name form the data service
    nc.currentUser = DataService.getCurrentUser();
    if (nc.currentUser.user_id == -1){
        // Invalid user. Display login page
        $location.path('/login');
    }
}

function getId(){
    nc.userProfileID = DataService.getUserToView();
    getPlayerInfo();
}


var base_url = 'http://recruitchute.io/';
nc.info = [];
nc.getPlayerInfo = getPlayerInfo;


function getPlayerInfo(){
    // use $http service to obtain data
    var data_object = {user_id : nc.userProfileID};
    $http.post(base_url + 'playerinfo/getPlayerInfo', data_object).then(function(response){
            if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
                // set current user
                nc.info = response.data;
            }
       },
       function(err) { console.log(err);
    });
}


nc.sendMessage = sendMessage;

function sendMessage(item){
    console.log("send message is being called");
    console.log("here is the item being passed in:");
    console.log(item);
    var data_object = {sender_id : nc.currentUser.user_id, receiver_id : nc.info.user_id, message : item, sender_fname : nc.currentUser.first_name, sender_lname : nc.currentUser.last_name, receiver_fname : nc.info.first_name, receiver_lname : nc.info.last_name };
    // use $http service to obtain data
    console.log("here is the data object:");
    console.log(data_object);
    $http.post('http://recruitchute.io/messages/sendMessage', data_object).then(function(response){
        if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
            
        }
    },
    function(err) { console.log(err);
    });
}
nc.messagers = [];
nc.getMessagers = getMessagers;
getMessagers();

function getMessagers(){
    console.log("get messagers is being called");
    var data_object = {user_id : nc.currentUser.user_id};
    // use $http service to obtain data
    console.log("here is the data object:");
    console.log(data_object);
    $http.post('http://recruitchute.io/messages/getMessagers', data_object).then(function(response){
        if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
            console.log("here is the response object:");
            console.log(response.data);
            
            for(var i=0; i<response.data.length; i++){
                nc.booladdit = false;
                for(var j=0; j<=nc.messagers.length; j++){
                    if(response.data[i].sender_id === nc.currentUser.user_id){
                        nc.booladdit = false;
                        break;
                    }
                    if(response.data[i].sender_id === nc.messagers[j]){
                        nc.booladdit = false;
                        break;
                    }else{
                        nc.booladdit = true; 
                    }  
                }
                if(nc.booladdit == true){
                    nc.messagers.push(response.data[i].sender_id);
                }
            }
            for(var i=0; i<response.data.length; i++){
                nc.booladdit = false;
                for(var j=0; j<=nc.messagers.length; j++){
                    
                    if(response.data[i].receiver_id === nc.currentUser.user_id){
                        nc.booladdit = false;
                        break;
                    }
                    if(response.data[i].receiver_id === nc.messagers[j]){
                        nc.booladdit = false;
                        break;
                    }else{
                        nc.booladdit = true; 
                    }  
                }
                if(nc.booladdit == true){
                    nc.messagers.push(response.data[i].receiver_id);
                }
            }
            console.log(nc.messagers);
            getMessagersInfo();
        }
    },
    function(err) { console.log(err);
    }); 
}
nc.messagersInfo = {};
nc.getMessagersInfo = getMessagersInfo;

function getMessagersInfo(){
    var data_object = {current_id : nc.currentUser, other_id : nc.messagers};
    console.log("data object");
    console.log(data_object);
    $http.post('http://recruitchute.io/messages/getMessagersInfo', data_object).then(function(response){
        if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
            // set current user
            nc.favinfo = response.data;
            console.log("favorited player info:");
            console.log(nc.favinfo);
            nc.favResults = true;
        }
        else{
            nc.nofavs = true;
        }
    },
    function(err) { console.log(err);
    });
}


}]);

