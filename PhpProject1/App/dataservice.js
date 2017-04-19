'use strict'

myApp.factory('DataService', [function(){
        // define your data service(members)
        var service = {};
        service.currentUser  = {first_name : -1, last_name : -1, user_id : -1};

        // define 'getters'
        service.getCurrentUser = getCurrentUser;

        // define 'setters'
        service.setCurrentUser = setCurrentUser;
        
        service.userToView = {};
        
        //define 'getter'
        service.getUserToView = getUserToView;
        
        // define 'setter'
        service.setUserToView = setUserToView;
        
        return service;
        
        //private functions
        function getUserToView(){
                return service.userToView;
        }


        function setUserToView(item){
                 service.userToView = item;
        }
        
        // private functions
        function getCurrentUser(){
                return service.currentUser;
        }


         function setCurrentUser(user){
                 service.currentUser = user;
        }




}]);
