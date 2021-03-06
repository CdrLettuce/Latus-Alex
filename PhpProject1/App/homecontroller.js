'use strict'
myApp.controller('homeController',['$http', 'DataService', '$location', function($http, DataService, $location){
    var hc = this;
    
    // get the current user from the data service and assign the value to currentUser
    
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
    
    // after login check to see if the user is a coach or a player
    hc.playerhome = true;
    hc.coachhome = false;
    
    hc.checkRole = checkRole;
    checkRole();
    
    function checkRole(){
        if(hc.currentUser.role_id == 2){
            hc.playerhome = false;
            hc.coachhome = true;
        }
    }
    
    // a
    
    hc.thingy = "Input textaroo";
    
  

    hc.searchForPlayer = searchForPlayer;
    hc.players = [];
    hc.displaySearchResults = false;
    hc.noResults = false;

    function searchForPlayer(item){
        if(!item.searchfirst){
            item.searchfirst = "";
        }
        if(!item.searchlast){
            item.searchlast = "";
        }
        var data_object = {firstname : item.searchfirst, lastname: item.searchlast};
        $http.post('http://recruitchute.io/search/searchPlayer', data_object ).then(function(response){
            
            hc.players = response.data;
            for(var i=0; i<hc.players.length; i++){
                if(hc.players[i].Image == null){
                    hc.players[i].Image = "http://recruitchute.io/Assets/images/soccer_player_icon.jpg";
                }
            }
            if(response.data != -1){
               hc.displaySearchResults = true;
               hc.noResults = false;
            }
            if(response.data == '-1'){
                hc.noResults = true;
                hc.displaySearchResults = false;
            }
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
                hc.info2 = response.data;
            }
        },
        function(err) { console.log(err);
        });
    }
    
    hc.info3 = [];
    hc.getPlayerInfo3 = getPlayerInfo3;
    hc.getPlayerInfo3();

    function getPlayerInfo3(){
        // use $http service to obtain data
        $http.post('http://recruitchute.io/playerinfo/getPlayerInfo3', hc.currentUser).then(function(response){
            if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
                // set current user
                hc.info3 = response.data;
            }
        },
        function(err) { console.log(err);
        });
    }
    
    hc.info4 = [];
    hc.getPlayerInfo4 = getPlayerInfo4;
    hc.getPlayerInfo4();

    function getPlayerInfo4(){
        // use $http service to obtain data
        $http.post('http://recruitchute.io/playerinfo/getPlayerInfo4', hc.currentUser).then(function(response){
            if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
                // set current user
                hc.info4 = response.data;
            }
        },
        function(err) { console.log(err);
        });
    }
    
    hc.item =  {};
    hc.addPlayerInfo = addPlayerInfo;

    function addPlayerInfo(item){
        if(!item.position1){
            if(hc.info2.position_1 != 0){
                item.position1 = hc.info2.position_1;
            }else {
                item.position1 = " ";
            }
        }
        if(!item.position2){
            if(hc.info3.position_2 != 0){
                item.position2 = hc.info3.position_2;
            }else {
                item.position2 = " ";
            }
        }
        if(!item.position3){            
            if(hc.info4.position_3 != 0){
                item.position3 = hc.info4.position_3;
            }else {
                item.position3 = " ";
            }
        }
        if(!item.bio){
            if(hc.info2.bio != 0){
                item.bio = hc.info2.bio;
            }else {
                item.bio = " ";
            }
        }
        if(!item.weight){
            if(hc.info2.weight != 0){
                item.weight = hc.info2.weight;
            }else {
                item.weight = " ";
            }
        }
        if(!item.school){
            if(hc.info2.h_school != 0){
                item.school = hc.info2.h_school;
            }else {
                item.school = " ";
            }
        }
        if(!item.gpa){
            if(hc.info2.gpa != 0){
                item.gpa = hc.info2.gpa;
            }else {
                item.gpa = " ";
            }
        }
        if(!item.grad){
            if(hc.info2.graduation_date != 0){
                item.grad = hc.info2.graduation_date;
            }else {
                item.grad = " ";
            }
        }
        if(!item.video){
            if(hc.info2.youtube_urls != 0){
                item.video = hc.info2.youtube_urls;
            }else {
                item.video = " ";
            }
        }
        if(!item.birth){
            if(hc.info2.dob != 0){
                item.birth = hc.info2.dob;
            }else {
                item.birth = " ";
            }
        }
        if(!item.feet){
            if(hc.info2.height_feet != 0){
                item.feet = hc.info2.height_feet;
            }else {
                item.feet = " ";
            }
        }
        if(!item.inches){
            if(hc.info2.height_inches != 0){
                item.inches = hc.info2.height_inches;
            }else {
                item.inches = " ";
            }
        }
        if(!item.bench){
            
            if(hc.info2.bench != 0){
                item.bench = hc.info2.bench;
            }else {
                item.bench = " ";
            }
        }
        if(!item.squat){
            if(hc.info2.squat != 0){
                item.squat = hc.info2.squat;
            }else {
                item.squat = " ";
            }
        }
        if(!item.mile){
            if(hc.info2.mile_time != 0){
                item.mile = hc.info2.mile_time;
            }else {
                item.mile = " ";
            }
        }
        if(!item.yard){
            if(hc.info2.dash_time != 0){
                item.yard = hc.info2.dash_time;
            }else {
                item.yard = " ";
            }
        }
        if(!item.image){
            item.image = hc.info2.Image;
            if(hc.info2.Image != 0){
                item.image = hc.info2.Image;
            }else {
                item.image = " ";
            }
        }
        
        var currentUser = hc.currentUser;
        var data_object = {userID : currentUser.user_id, position1 : item.position1, position2 : item.position2,
                            position3 : item.position3, bio : item.bio, weight : item.weight, 
                            school : item.school, gpa : item.gpa, grad : item.grad, videourl : item.video,
                            birth : item.birth, feet : item.feet, inches : item.inches, bench : item.bench,
                            squat : item.squat, mile : item.mile, yard : item.yard, image : item.image};             
        $http.post('http://recruitchute.io/profileupdate/updateProfile', data_object ).then(function(response){
            hc.success_message = "Thank you " + hc.currentUser.first_name + ", your profile has been updated.";
            hc.displaySuccessMessage=true;
            hc.getPlayerinfo2;
        },
        function(err) { console.log(err);
        });
        $('#modalConfirm').css('display', 'block');
        // When the user clicks on <span> (x), close the modal
        $(".close").click(function() {
                $('#modalConfirm').css('display', 'none');
        });
    }

    hc.viewProfile = viewProfile;

    function viewProfile(thing){
        DataService.setUserToView(thing);
        $location.path('/userprofile');
    }
    
    hc.info5 = [];
    hc.getCoachInfo = getCoachInfo;
    hc.getCoachInfo();

    function getCoachInfo(){
        
        // use $http service to obtain data
        $http.post('http://recruitchute.io/playerinfo/getCoachInfo', hc.currentUser).then(function(response){
            if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
                // set current user
                
                hc.info5 = response.data;
                
            }
        },
        function(err) { console.log(err);
        });
    }
    
    hc.addCoachInfo = addCoachInfo;

    function addCoachInfo(item){
        if(!item.college){
            item.college = hc.info5.college;
        }
        if(!item.image){
            item.image = hc.info5.image;
        }
        if(!item.bio){
            item.bio = hc.info5.bio;
        }
        if(!item.youtube_urls){
            item.youtube_urls = hc.info5.youtube_urls;
        }
        if(!item.head_coach){
            item.head_coach = hc.info5.head_coach;
        }
        if(!item.assistant_coach){
            item.assistant_coach = hc.info5.assistant_coach;
        }
        if(!item.division){
            item.division = hc.info5.division;
        }
        
        var currentUser = hc.currentUser;
        var data_object = {userID : currentUser.user_id, bio : item.bio, youtube_urls : item.youtube_urls, 
                            college : item.college, image : item.image, division : item.division, 
                            head_coach : item.head_coach, assistant_coach : item.assistant_coach};             
        $http.post('http://recruitchute.io/profileupdate/updateCoachProfile', data_object ).then(function(response){
            getCoachInfo();
        },
        function(err) { console.log(err);
        });
        $('#modalConfirm').css('display', 'block');
        // When the user clicks on <span> (x), close the modal
        $(".close").click(function() {
                $('#modalConfirm').css('display', 'none');
                $location.path('/profile');
        });
    }

}]);
myApp.filter('trustAsResourceUrl', ['$sce', function($sce) {
            return function(val) {
                return $sce.trustAsResourceUrl(val);
            };
        }])