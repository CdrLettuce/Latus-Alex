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
                <table class='table'>
                    <tr ng-repeat='item in ex.players track by $index'
                                        ng-show="item.subject==ex.subject.name">
                        <td class='col-xs-2'>
                            <a ng-click='ex.viewProfile(item.user_id)'>
                                <img class='searchImageLarge'src='{{item.Image | trustAsResourceUrl}}' />
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