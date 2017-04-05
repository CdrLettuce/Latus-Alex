'use strict'
myApp.controller('customerController',['$http', 'DataService','$location', function($http, DataService, $location){
  var cc = this;
 cc.currentUser = {};
        init();

        function init(){
                // obtain name form the data service
                cc.currentUser = DataService.getCurrentUser();
                if (cc.currentUser.customer_id == -1){
                        // Invalid user. Display login page
                        $location.path('/login');
                }
        }

cc.purchases = [];
cc.getCustomerPurchases = getCustomerPurchases;
cc.getCustomerPurchases();

function getCustomerPurchases(){
	var userID = cc.currentUser.customer_id;
        
      // use $http service to obtain data
	$http.get('http://washington.uww.edu/cs482/butlersj02/midterm/product/getCustomerPurchases/'+userID ).then(function(response){
		cc.purchases = response.data;
        },
        	function(err) { console.log(err);
     	});
}


}]);

