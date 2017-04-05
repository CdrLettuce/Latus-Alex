'use strict'
myApp.controller('loginController',['$http','DataService','$location', function($http, DataService, $location){
  var lc = this;
  lc.user = {};
  lc.currentUser = {};
  lc.login = login;


  // define the URL for your framework
  // var base_url = 'http://washington.uww.edu/cs482/butlersj02/midterm/';
  var base_url = 'http://recruitchute.io/';

 // perform initial actions
 init();


        // Define initial actions
        function init(){
                /* Clear login data. The system uses 'customer_id' to authenticate the current user.
                   Set it to -1 (default value) when a user clicks the 'sign out' link
                   or user tries to sign in
                */
                DataService.setCurrentUser({customer_id : -1});
        }

        function login(){
        // use $http service to obtain data
        console.log("Login being called");
                $http.post(base_url + 'login/checkLogin', lc.user).then(function(response){
                        if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){

                                // set current user
                                lc.currentUser = response.data;
                                // use DataService to set the current user so that other controllers can share the same user data
                                DataService.setCurrentUser(lc.currentUser);
                                // display the 'Home' page
                                $location.path('/');
                        }
                   },
                   function(err) { console.log(err);

                });
        }
}]);
