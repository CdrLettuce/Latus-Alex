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


nc.inboxMessages = [];
nc.getInboxMessages = getInboxMessages;
getInboxMessages();


nc.outboxMessages = [];
nc.getOutboxMessages = getOutboxMessages;
getOutboxMessages();




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


function getInboxMessages(){
    console.log("get Inbox Messages is being called");
    var data_object = {user_id : nc.currentUser.user_id};
    // use $http service to obtain data
    console.log("here is the data object:");
    console.log(data_object);
    $http.post('http://recruitchute.io/messages/getInboxMessages', data_object).then(function(response){
        if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
            console.log("here is the Inbox response object:");
            
            nc.inboxMessages = response.data;
            console.log(nc.inboxMessages);
        }
    },
    function(err) { console.log(err);
    }); 
}


function getOutboxMessages(){
    console.log("get Outbox Messages is being called");
    var data_object = {user_id : nc.currentUser.user_id};
    // use $http service to obtain data
    console.log("here is the data object:");
    console.log(data_object);
    $http.post('http://recruitchute.io/messages/getOutboxMessages', data_object).then(function(response){
        if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
            console.log("here is the Outbox response object:");
            
            nc.outboxMessages = response.data;
            console.log(nc.outboxMessages);
        }
    },
    function(err) { console.log(err);
    }); 
}



}]);

