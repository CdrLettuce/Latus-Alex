'use strict'
myApp.controller('homeController',['DataService','$location', function( DataService, $location){
  var hc = this;
 hc.currentUser = {};

        init();

        function init(){
                // obtain name form the data service
                hc.currentUser = DataService.getCurrentUser();
                if (hc.currentUser.customer_id == -1){
                        // Invalid user. Display login page
                        $location.path('/login');
                }
        }


}]);
