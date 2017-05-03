<nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="http://recruitchute.io/index.php" style='padding-top:10px;'><img src="../Assets/images/logo_trans.png" alt="logo" height="55" width="160"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse navbar-right link">                 
                    <a class="navbar-brand home"  href="#/" style=""><i class="fa fa-home fa-1x blue home" aria-hidden="true" style=""></i><p>Home </p></a>                
                    <a class="navbar-brand"  href="#/search"><i class="fa fa-binoculars fa-1x blue" aria-hidden="true" style=""></i><p>Search</p></a>                        
                    <a class="navbar-brand"  href="#/network"><i class="fa fa-users fa-1x blue" aria-hidden="true" style=""></i><p>My Network</p></a>                                 
                    <a class="navbar-brand"  href="#/messages"><i class="fa fa-comment-o fa-1x blue" aria-hidden="true" style=""></i><p>Messages</p></a>                   
                    <a class="navbar-brand"  href="#/profile"><i class="fa fa-user-circle fa-1x blue" aria-hidden="true" style=""></i><p>My Profile</p></a>  
                    <a class="navbar-brand"  href="#/login"><i class="fa fa-power-off fa-1x blue" aria-hidden="true" style=""></i><p>Sign Out</p></a>
                </div>
            </div><!--/.navbar-collapse -->
          </div>
        </nav>
<?php
    header('X-Frame-Options: GOFORIT'); 
?>

styles.css

#fav-results-table, #fav-results-table tr, #fav-results-table td{
    border: none;
}

userprofile.php

<?php
include('appHeader2.php');
?>
<div id="profile-container" class="top-pad" ng-controller='userprofileController as ex'>
    <div id='profile-background' class='row container-fluid'>
        <div class='col-xs-12'>
            
        </div>
    </div>
    <div class='row container-fluid'>
        <div class="col-sm-3 col-sm-offset-1">
            <div class="sample-container">
                <img class='profileImage'src='../Assets/images/soccer_player_icon.jpg' />
                <h3> {{ex.info.first_name}} {{ex.info.last_name}} </h3>
                <h4> {{ex.info2.position}}</h4>
                <h4> {{ex.info.city}}, {{ex.info.state_name}} </h4>
                <a ng-click='ex.favoritePlayer(info.user_id)'>
                    <button style="margin-bottom:10px;" class="btn btn-primary">Favorite {{ex.info.first_name}}</button>
                </a>
                <button id="msgbtn" ng-click='ex.showMessageContainer()' class="btn btn-primary">Send {{ex.info.first_name}} a message</button>
            </div>
            <!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close"><i class="fa fa-window-close" aria-hidden="true"></i></span>
      <h2>Send a message</h2>
    </div>
	<form>
    <div class="modal-body">
  
    <div class="form-group">
      <label for="message">Enter your message</label>
      <textarea class="form-control" rows="5" id="comment"></textarea>
    </div>
	
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-primary">Send Message</button>
	 </div> 
	  </form>
  </div>
</div>
            
        </div>
        <div class="col-sm-7">
            <div class="sample-container">
                <h4 class='title'>Videos</h4>
                <div class="video-container">
                    <iframe src="{{ex.info2.youtube_urls | trustAsResourceUrl}}" frameborder="0" allowfullscreen>                        
                    </iframe>
                </div>
            </div>
        </div>
    </div>
    <div class='row container-fluid'>
        <div class="col-sm-5 col-sm-offset-1">
            <div class="sample-container left-text">
                <h4 class='title'>Stats</h4>
                <div class='row container-fluid'>
                        <div class='col-xs-6'>
                            <p><b>Height: </b>{{ex.info2.height_feet}}'{{ex.info2.height_inches}}"</p>
                        </div>
                       <div class='col-xs-6'>
                            <p><b>Mile Time: </b>{{ex.info2.mile_time}}</p>
                        </div>
                </div>
                <div class='row container-fluid'>
                        <div class='col-xs-6'>
                            <p><b>Weight: </b>{{ex.info2.weight}}</p>
                        </div>
                       <div class='col-xs-6'>
                            <p><b>40-Yard Dash Time: </b>{{ex.info2.dash_time}}</p>    
                        </div>
                </div>
                <div class='row container-fluid'>
                        <div class='col-xs-6'>
                            <p><b>Primary Position:</b> {{ex.info2.position}}</p>
                        </div>
                       <div class='col-xs-6'>
                             <p><b>Max Bench: </b>{{ex.info2.bench}}</p>   
                        </div>
                </div>
                <div class='row container-fluid'>
                        <div class='col-xs-6'>
                            <p><b>Secondary Position: </b>{{ex.info2.position_2}}</p>
                        </div>
                       <div class='col-xs-6'>
                             <p><b>Max Squat: </b>{{ex.info2.squat}}</p>   
                        </div>
                </div>

            </div>
        </div>
        <div class="col-sm-5">
            <div class="sample-container left-text">
                <h4 class='title'>About</h4>
                <div class='row container-fluid'>
                        <div class='col-xs-6'>
                            <p><b>Hometown: </b>{{ex.info.city}}, {{ex.info.state_name}}</p>
                        </div>
                       <div class='col-xs-6'>
                             <p><b>Email: </b>{{ex.info.email}}</p>   
                        </div>
                </div>
                <div class='row container-fluid'>
                        <div class='col-xs-6'>
                            <p><b>School: </b>{{ex.info2.h_school}}</p>
                        </div>
                       <div class='col-xs-6'>
                             <p><b>Phone: </b>{{ex.info.phone}}</p>   
                        </div>
                </div>
                <div class='row container-fluid'>
                        <div class='col-xs-6'>
                            <p><b>GPA: </b>{{ex.info2.gpa}}</p>
                        </div>
                       <div class='col-xs-6'>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class='row container-fluid'>
        <div class='col-sm-10 col-sm-offset-1'>
            <div class='sample-container'>
                <h4 class='title' >Bio</h4>
                <p>"{{ex.info2.bio}}"</p>
            </div>
        </div>
    </div>
</div>

</div>

</div>

userprofilecontroller.js

'use strict'
myApp.controller('userprofileController',['$http', 'DataService','$location', function($http, DataService, $location){
var uc = this;
uc.currentUser = {};
init();

var base_url = 'http://recruitchute.io/';

function init(){
    // obtain name form the data service
    uc.currentUser = DataService.getCurrentUser();
    if (uc.currentUser.user_id == -1){
        // Invalid user. Display login page
        $location.path('/login');
    }
}

// Get the id of the profile that you want to view from the data service
uc.userProfileID = {};
getId();

function getId(){
    uc.userProfileID = DataService.getUserToView();
    getPlayerInfo();
    getPlayerInfo2();
}


var base_url = 'http://recruitchute.io/';
uc.info = [];
uc.getPlayerInfo = getPlayerInfo;


function getPlayerInfo(){
    // use $http service to obtain data
    var data_object = {user_id : uc.userProfileID};
    $http.post(base_url + 'playerinfo/getPlayerInfo', data_object).then(function(response){
            if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
                // set current user
                uc.info = response.data;
            }
       },
       function(err) { console.log(err);
    });
}

uc.info2 = [];
uc.getPlayerInfo2 = getPlayerInfo2;

        
function getPlayerInfo2(){
    // use $http service to obtain data
    var data_object = {user_id : uc.userProfileID};
    $http.post(base_url + 'playerinfo/getPlayerInfo2', data_object).then(function(response){
            if (typeof response.data !== 'undefined' && parseInt(response.data) != -1){
                // set current user
                uc.info2 = response.data;
             }
       },
       function(err) { console.log(err);
    });
}

function favoritePlayer(item){
    
    var data_object = {current_user : uc.currentUser.user_id, followed_id : item};
    console.log("data_object");
    console.log(data_object);
    $http.post('http://recruitchute.io/favorite/favoritePlayer', data_object ).then(function(response){
        console.log(response);
        getFavoritedPlayers();
    },
    function(err) { console.log(err);
    });   
}

uc.showMessageContainer = showMessageContainer;

function showMessageContainer(){ 
    console.log("WHUT UPP");
    // Get the modal
    var modal = $('#myModal');

    // Get the button that opens the modal
    var btn = $("#msgbtn");

    // Get the <span> element that closes the modal
    var span = $(".close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
}

}]);
myApp.filter('trustAsResourceUrl', ['$sce', function($sce) {
            return function(val) {
                return $sce.trustAsResourceUrl(val);
            };
        }])
        
        advsearch.php
        
        <?php
include('appHeader2.php');
?>
<div id="search-container" class="xtra-top-pad" ng-controller='advsearchController as ex'>
    <div  class='row container-fluid'>
        <div id='search-controls' class=' col-sm-10 col-sm-offset-1'>
            <h4>
                <span class=""><i class="fa fa-search fa" aria-hidden="true"></i></span>
                Advanced Search
            </h4>	
            <!-- Advanced Search input -->
            <div class="form-group ">
                <div class="form-group col-md-6 col-sm-6">
                    <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="searchfirst" id="searchfirst" ng-model='ex.item.searchfirst' placeholder="First Name"/>
                    </div>
                </div>
                <div class="form-group col-md-6 col-sm-6">
                    <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="searchlast" id="searchlasst" ng-model='ex.item.searchlast' placeholder="Last Name"/>
                    </div>
                </div>
            </div>
            <div class="form-group ">
                <!-- State Selection -->
                <div class="form-group col-sm-6 ">
                    <label class="cols-sm-2 control-label" for="state">Select your state</label>
                    <div class="cols-sm-10">
                        <div class="input-group">		
                            <span class="input-group-addon"><i class="fa fa-map-marker fa" aria-hidden="true"></i></span>
                            <select required id="state" name="state" ng-model='ex.item.state' class="form-control">
                                <option value="">Select state</option>
                                <option value="1">Alabama</option>
                                <option value="2">Alaska</option>
                                <option value="3">Arizona</option>
                                <option value="4">Arkansas</option>
                                <option value="5">California</option>
                                <option value="6">Colorado</option>
                                <option value="7">Connecticut</option>
                                <option value="8">Delaware</option>
                                <option value="9">Florida</option>
                                <option value="10">Georgia</option>
                                <option value="11">Hawaii</option>
                                <option value="12">Idaho</option>
                                <option value="13">Illinois</option>
                                <option value="14">Indiana</option>
                                <option value="15">Iowa</option>
                                <option value="16">Kansas</option>
                                <option value="17">Kentucky</option>
                                <option value="18">Louisiana</option>
                                <option value="19">Maine</option>
                                <option value="20">Maryland</option>
                                <option value="21">Massachusetts</option>
                                <option value="22">Michigan</option>
                                <option value="23">Minnesota</option>
                                <option value="24">Mississippi</option>
                                <option value="25">Missouri</option>
                                <option value="26">Montana</option>
                                <option value="27">Nebraska</option>
                                <option value="28">Nevada</option>
                                <option value="29">New Hampshire</option>
                                <option value="30">New Jersey</option>
                                <option value="31">New Mexico</option>
                                <option value="32">New York</option>
                                <option value="33">North Carolina</option>
                                <option value="34">North Dakota</option>
                                <option value="35">Ohio</option>
                                <option value="36">Oklahoma</option>
                                <option value="37">Oregon</option>
                                <option value="38">Pennsylvania</option>
                                <option value="39">Rhode Island</option>
                                <option value="40">South Carolina</option>
                                <option value="41">South Dakota</option>
                                <option value="42">Tennessee</option>
                                <option value="43">Texas</option>
                                <option value="44">Utah</option>
                                <option value="45">Vermont</option>
                                <option value="46">Virginia</option>
                                <option value="47">Washington</option>
                                <option value="48">West Virginia</option>
                                <option value="49">Wisconsin</option>
                                <option value="50">Wyoming</option>
                            </select>
                        </div>			
                    </div>					
                </div>
                <!-- Gender input -->
                <div class="form-group col-sm-6 ">
                    <label class="control-label" for="gender">Gender</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                        <select required id="gender" name="gender" ng-model='ex.item.gender' class="form-control">
                            <option value="">Select gender</option>
                            <option value="1">Female</option>
                            <option value="2">Male</option>							
                        </select>
                    </div>				
                </div>
            </div>
            <div class="form-group ">
                <!-- Year input -->
                <div class="form-group col-sm-6 ">
                    <label class="control-label" for="grad_year">Graduation Year</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-graduation-cap fa" aria-hidden="true"></i></span>
                        <select required id="grad_year" name="grad_year" ng-model='ex.item.gradYear' class="form-control">
                            <option value="">Select Graduation Year</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>	
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>	
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>	
                        </select>
                    </div>				
                </div>
                <!-- Position select -->
                <div class="form-group col-md-6 col-sm-6 ">
                    <label class="cols-sm-2 control-label" for="position">Primary Position <!--(You can add more later!)--></label>
                    <div class="cols-sm-10">
                        <div class="input-group">	
                        <span class="input-group-addon"><i class="fa fa-soccer-ball-o fa" aria-hidden="true"></i></span>
                            <select id="position3" name="position3" ng-model='ex.item.position' class="form-control">
                                <option value="">Select position</option>
                                <option value="1">Goalkeeper</option>
                                <option value="2">Right Back</option>
                                <option value="3">Left Back</option>
                                <option value="4">Sweeper</option>
                                <option value="5">Stopper</option>
                                <option value="6">Right Midfielder</option>
                                <option value="7">Left Midfielder</option>
                                <option value="8">Defensive Midfielder</option>
                                <option value="9">Striker</option>
                                <option value="10">Forward</option>				
                        </select>
                        </div>			
                    </div>					
                </div>
            </div>
            
            
            <div class="form-group col-sm-4 col-sm-offset-4">
                <p><button type='button' class='btn btn-primary btn-lg btn-block login-button' ng-click='ex.advsearchForPlayer(ex.item)'>Search</button></p>
            </div>
        </div>
    </div>
    <div  ng-show='ex.displaySearchResults' id='searchResults' class='row container-fluid'>
        <div  id='search-results' class ='col-sm-10 col-sm-offset-1'>
            <h3 class='col-xs-12 center-text' ng-show="ex.noResults">
                No players found! Please modify your search and try again.
            </h3>
            <div >
                <h4>Search Results: </h4>
                <table  class='table'>
                    <tr ng-repeat='item in ex.players track by $index'
                                        ng-show="item.subject==ex.subject.name">
                        <td class='col-xs-2'>
                            <a ng-click='ex.viewProfile(item.user_id)'>
                             <i class="fa fa-id-card fa-5x" aria-hidden="true"></i>
                            </a>
                        </td>
                       <td class='col-xs-8'>
                            <a ng-click='ex.viewProfile(item.user_id)'>
                                <h4>{{item.first_name}} {{item.last_name}}</h4>
                            </a>
                            <p>{{item.city}}, {{item.state_name}}</p>
                            <p>{{item.position}}, Class of {{item.graduation_date}}</p>
                        </td>
                        <td class='col-xs-2'>
                            <a ng-click='ex.favoritePlayer(item.user_id)'>
                                <button class="btn btn-primary">Favorite</button>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>  
        </div>
    </div>
</div>

</div>

</div>