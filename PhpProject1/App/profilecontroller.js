'use strict'
myApp.controller('profileController',['$http', 'DataService','$location', function($http, DataService, $location){
    var cc = this;
    cc.currentUser = {};
    init();

    function init(){
        // obtain name form the data service
        cc.currentUser = DataService.getCurrentUser();
        if (cc.currentUser.user_id == -1){
            // Invalid user. Display login page
            $location.path('/login');
        }
    }

    var base_url = 'http://recruitchute.io/';
    cc.info = [];
    cc.getPlayerInfo = getPlayerInfo;
    cc.getPlayerInfo();

    function getPlayerInfo(){
        // use $http service to obtain data
        $http.post(base_url + 'playerinfo/getPlayerInfo', cc.currentUser).then(function(response){
            if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
                // set current user 
                cc.info = response.data;
            }
        },
           function(err) { console.log(err);
        });
    }

    cc.info2 = [];
    cc.getPlayerInfo2 = getPlayerInfo2;
    cc.getPlayerInfo2();

    function getPlayerInfo2(){
        // use $http service to obtain data
        $http.post(base_url + 'playerinfo/getPlayerInfo2', cc.currentUser).then(function(response){
            if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
                // set current user
                cc.info2 = response.data;
            }
        },
           function(err) { console.log(err);
        });
    }

}]);

myApp.controller('MainCtrl', function($scope) {
  $scope.code = 'trRc1_CATfo';
});
myApp.directive('myYoutube', function($sce) {
  return {
    restrict: 'EA',
    scope: { code:'=' },
    replace: true,
    template: '<div style="height:400px;"><iframe width="560" height="300" src="{{url}}" frameborder="0" allowfullscreen></iframe></div>',
    link: function (scope) {
        console.log('here');
        scope.$watch('code', function (newVal) {
           if (newVal) {
               scope.url = $sce.trustAsResourceUrl("http://www.youtube.com/embed/" + newVal);
           }
        });
    }
  };
});