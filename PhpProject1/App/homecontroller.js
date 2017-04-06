'use strict'
myApp.controller('homeController',['$http', 'DataService', '$location', function($http, DataService, $location){
  var hc = this;
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
console.log("HELLOOOOO");
hc.item =  {};

hc.addPlayerInfo = addPlayerInfo;

        function addPlayerInfo(item){
                console.log("function is being called");
                console.log(item);
		var currentUser = hc.currentUser;
		// var quan = pc.quantity.quantity;
		var data_object = {userID : currentUser.user_id, position : item.position, bio : item.bio, height : item.height, weight : item.weight, school : item.school, gpa : item.gpa, grad : item.grad}; 
		$http.post('http://washington.uww.edu/cs482/butlersj02/midterm/product/addNewPurchase', data_object ).then(function(response){
			pc.success_message = "You have purchased " + item.product_title;
			pc.displaySuccessMessage=true;
		},
		function(err) { console.log(err);
		});	
	}

}]);
