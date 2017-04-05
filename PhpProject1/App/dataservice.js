'use strict'

myApp.factory('DataService', [function(){
        // define your data service(members)
        var service = {};
        service.currentUser  = {first_name : -1, last_name : -1, customer_id : -1};

        // define 'getters'
        service.getCurrentUser = getCurrentUser;

        // define 'setters'
        service.setCurrentUser = setCurrentUser;
        return service;


        // private functions
        function getCurrentUser(){
                return service.currentUser;
        }


         function setCurrentUser(user){
                 service.currentUser = user;
        }




}]);
