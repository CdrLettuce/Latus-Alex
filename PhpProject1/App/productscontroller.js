'use strict'
myApp.controller('productsController',['$http', 'DataService', '$location', function($http, DataService, $location){
   var pc = this;
   // define subjects
  pc.items = [ {name: 'Televisions', type: 'tv'},
                    {name: 'Mobile Phones', type : "cell"},
                             {name : 'Computers', type : 'computer'},
                ];
  pc.item =  {};
  // pc.item = pc.items[0];
  pc.products = [];
  pc.success_message = "";
  pc.displaySuccessMessage = false;

  pc.getProductsList = getProductsList;

  // define the  URL for your framework
  var base_url = 'http://washington.uww.edu/cs482/butlersj02/midterm/';

  // initialize product page
  init();

  function init(){
        // check for a valid user
        pc.currentUser = DataService.getCurrentUser();
        if (pc.currentUser.customer_id == -1)
                $location.path('/login');

  }

  function getProductsList(type){

      // use $http service to obtain data
      $http.get(base_url + 'product/category/'+type ).then(function(response){
            pc.products = response.data;
	
        },
        function(err) { console.log(err);

     });
 }


	pc.new_purchase = {};
	pc.addNewPurchase = addNewPurchase;
	
	pc.quantity = {};

	function addNewPurchase(item){
		var currentUser = pc.currentUser;
		// var quan = pc.quantity.quantity;
		var data_object = {custId : currentUser.customer_id, prodId : item.product_id, quan : item.quantity}; 
		$http.post('http://washington.uww.edu/cs482/butlersj02/midterm/product/addNewPurchase', data_object ).then(function(response){
			pc.success_message = "You have purchased " + item.product_title;
			pc.displaySuccessMessage=true;
		},
		function(err) { console.log(err);
		});	
	}


}]);
