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
            item.position1 = hc.info2.position_1;
        }
        if(!item.position2){
            item.position2 = hc.info3.position_2;
        }
        if(!item.position3){
            item.position3 = hc.info4.position_3;
        }
        if(!item.bio){
            item.bio = hc.info2.bio;
        }
        if(!item.weight){
            item.weight = hc.info2.weight;
        }
        if(!item.school){
            item.school = hc.info2.h_school;
        }
        if(!item.gpa){
            item.gpa = hc.info2.gpa;
        }
        if(!item.grad){
            item.grad = hc.info2.graduation_date;
        }
        if(!item.video){
            item.video = hc.info2.youtube_urls;
        }
        if(!item.birth){
            item.birth = hc.info2.dob;
        }
        if(!item.feet){
            item.feet = hc.info2.height_feet;
        }
        if(!item.inches){
            item.inches = hc.info2.height_inches;
        }
        if(!item.bench){
            item.bench = hc.info2.bench;
        }
        if(!item.squat){
            item.squat = hc.info2.squat;
        }
        if(!item.mile){
            item.mile = hc.info2.mile_time;
        }
        if(!item.yard){
            item.yard = hc.info2.dash_time;
        }
        if(!item.image){
            item.image = hc.info2.Image;
        }
        
        var currentUser = hc.currentUser;
        var data_object = {userID : currentUser.user_id, position1 : item.position1, position2 : item.position2,
                            position3 : item.position3, bio : item.bio, weight : item.weight, 
                            school : item.school, gpa : item.gpa, grad : item.grad, videourl : item.video,
                            birth : item.birth, feet : item.feet, inches : item.inches, bench : item.bench,
                            squat : item.squat, mile : item.mile, yard : item.yard};             
        $http.post('http://recruitchute.io/profileupdate/updateProfile', data_object ).then(function(response){
            hc.success_message = "Thank you " + hc.currentUser.first_name + ", your profile has been updated.";
            hc.displaySuccessMessage=true;
            hc.getPlayerinfo2;
        },
        function(err) { console.log(err);
        });	
    }

    hc.viewProfile = viewProfile;

    function viewProfile(thing){
        DataService.setUserToView(thing);
        $location.path('/userprofile');
    }

}]);
