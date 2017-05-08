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
nc.bigMessage = {};
nc.noBigMessage = true;
nc.showBigMessage = false;

nc.displayBigMessage = displayBigMessage;

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

nc.showMessageContainer = showMessageContainer;

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

nc.inboxReply = inboxReply;

function inboxReply(item){
    console.log("Big messsage:");
    console.log(item);
    var data_object = {sender_id : nc.currentUser.user_id, receiver_id : item.sender_id, message : item.replymessage, subject : item.replysubject};
    // use $http service to obtain data
    $http.post('http://recruitchute.io/messages/sendMessage', data_object).then(function(response){
        if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
            nc.noBigMessage = true;
            nc.showBigMessage = false;
        }
    },
    function(err) { console.log(err);
    });
    $('#modalConfirm').css('display', 'block');  
    // When the user clicks on <span> (x), close the modal
    $(".close").click(function() {
            $('#modalConfirm').css('display', 'none');
    });
}

nc.outboxReply = outboxReply;

function outboxReply(item){
    console.log("Big messsage:");
    console.log(item);
    var data_object = {sender_id : nc.currentUser.user_id, receiver_id : item.sender_id, message : item.replymessage, subject : item.replysubject};
    // use $http service to obtain data
    $http.post('http://recruitchute.io/messages/sendMessage', data_object).then(function(response){
        if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
            nc.noBigMessage = true;
            nc.showBigMessage = false;
        }
    },
    function(err) { console.log(err);
    });
    $('#modalConfirm').css('display', 'block');
    // When the user clicks on <span> (x), close the modal
    $(".close").click(function() {
            $('#modalConfirm').css('display', 'none');
    });
}

function getInboxMessages(){
    var data_object = {user_id : nc.currentUser.user_id};
    // use $http service to obtain data
    $http.post('http://recruitchute.io/messages/getInboxMessages', data_object).then(function(response){
        if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
            nc.inboxMessages = response.data;
        }
    },
    function(err) { console.log(err);
    }); 
}

function getOutboxMessages(){
    var data_object = {user_id : nc.currentUser.user_id};
    // use $http service to obtain data
    $http.post('http://recruitchute.io/messages/getOutboxMessages', data_object).then(function(response){
        if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
            nc.outboxMessages = response.data;
        }
    },
    function(err) { console.log(err);
    }); 
}

function displayBigMessage(item){
    nc.bigMessage = item;
    nc.noBigMessage = false;
    nc.showBigMessage = true;
}

}]);

