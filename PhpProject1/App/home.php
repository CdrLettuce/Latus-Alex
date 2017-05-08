<?php
include('appHeader2.php');
?>
<div  id='homeContainer' class="xtra-top-pad" ng-controller='homeController as ex'>

    <div class='row container-fluid' >
        <!--Modal for sent confirmation-->
        <div id="modalConfirm" class="modal">
            <!-- Modal content -->
            <div class="modal-confirm">
                <div class="modal-body">
                    <span class="close"><i class="fa fa-window-close" aria-hidden="true"></i></span>
                    <h3>Your profile has been updated</h3>
                </div>
            </div>
        </div>  
        <div class="col-lg-6 col-sm-6 col-sm-offset-1 home-container" ng-show='ex.playerhome'>
            <div  id='update-profile-header' data-toggle="collapse" data-target="#updateForm">
                <h4 class="col-sm-11">
                    <span class=""><i class="fa fa-edit fa" aria-hidden="true"></i></span>
                    Update your profile
                </h4>
                <h4 class="col-sm-1"><i class="fa fa-caret-square-o-down fa" aria-hidden="true"></i></h4>
            </div>
			<hr>
            <form id="updateForm" class="collapse" method="" action="">
                <!-- Position current -->
                <div class="form-group col-md-4 col-sm-4 ">
                    <p><b>Primary Position:</b></p>
                </div>
                <div class="form-group col-md-3 col-sm-3 ">
                    <p>{{ex.info2.position}}</p>
                </div>
                <div class='row container-fluid'>
                    <!-- Position select -->
                    <div class="form-group col-md-5 col-sm-5 ">
                        <div class="cols-sm-10">
                            <div class="input-group">	
                            <span class="input-group-addon"><i class="fa fa-soccer-ball-o fa" aria-hidden="true"></i></span>
                                <select id="position1" name="position1" ng-model='ex.item.position1' class="form-control">
                                    <option value="0">Select new position</option>
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
                
                <div class='row container-fluid'>
                    <!-- Position 2 current -->
                    <div class="form-group col-md-4 col-sm-4 ">
                        <p><b>Secondary Position:</b></p>
                    </div>
                    <div class="form-group col-md-3 col-sm-3 ">
                        <p>{{ex.info3.position}}</p>
                    </div>

                    <!-- Position 2 select -->
                    <div class="form-group col-md-5 col-sm-5 ">
                        <div class="cols-sm-10">
                            <div class="input-group">	
                            <span class="input-group-addon"><i class="fa fa-soccer-ball-o fa" aria-hidden="true"></i></span>
                            <select id="position2" name="position2" ng-model='ex.item.position2'  class="form-control">
                                    <option value="0">Select new position</option>
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
                
                <div class='row container-fluid'>
		
                    <!-- Position 3 current -->
                    <div class="form-group col-md-4 col-sm-4 ">
                        <p><b>Tertiary Position:</b></p>
                    </div>
                    <div class="form-group col-md-3 col-sm-3 ">
                        <p>{{ex.info4.position}}</p>
                    </div>
                    <!-- Position 3 select -->
                    <div class="form-group col-md-5 col-sm-5 ">
                        <div class="cols-sm-10">
                            <div class="input-group">	
                            <span class="input-group-addon"><i class="fa fa-soccer-ball-o fa" aria-hidden="true"></i></span>
                                <select id="position3" name="position3" ng-model='ex.item.position3' class="form-control">
                                    <option value="0">Select position</option>
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
               
				
                <hr>
                
                <div class='row container-fluid'>
                    <!-- High School current -->
                    <div class="form-group col-md-4 col-sm-4 ">
                        <p><b>High School:</b></p>
                    </div>
                    <div class="form-group col-md-3 col-sm-3 ">
                        <p>{{ex.info2.h_school}}</p>
                    </div>   
                    <!-- High School input -->
                    <div class="form-group col-md-5 col-sm-5 ">
                            <div class="cols-sm-10">
                                    <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-institution fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="school" id="school" ng-model='ex.item.school'/>
                                    </div>
                            </div>
                    </div>
                </div>
                
                <div class='row container-fluid'>
                    <!-- GPA current -->
                    <div class="form-group col-md-4 col-sm-4 ">
                        <p><b>GPA:</b></p>
                    </div>
                    <div class="form-group col-md-3 col-sm-3 ">
                        <p>{{ex.info2.gpa}}</p>
                    </div>
                    <!-- GPA input -->
                    <div class="form-group col-md-5 col-sm-5 ">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-graduation-cap fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="gpa" id="gpa" ng-model='ex.item.gpa' />
                        </div>
                    </div>
                </div>
                
                <div class='row container-fluid'>
                    <!-- Graduation Year current -->
                    <div class="form-group col-md-4 col-sm-4 ">
                        <p><b>Graduation Year:</b></p>
                    </div>
                    <div class="form-group col-md-3 col-sm-3 ">
                        <p>{{ex.info2.graduation_date}}</p>
                    </div>
                    <!-- Graduation Date input (mm/yyyy)-->
                    <div class="form-group col-md-5 col-sm-5 ">
                            <div class="cols-sm-10">
                                    <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-graduation-cap fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="grad" id="grad" ng-model='ex.item.grad'/>
                                    </div>
                            </div>
                    </div>
                </div>
                
                <hr>              
                
                <div class='row container-fluid'>
                    <!-- Birth Date  current -->
                    <div class="form-group col-md-4 col-sm-4 ">
                        <p><b>Birth Date:</b></p>
                    </div>
                    <div class="form-group col-md-3 col-sm-3 ">
                        <p>{{ex.info2.dob}}</p>
                    </div>
                    <!-- Birth Date input (mm/yyyy)-->
                    <div class="form-group col-md-5 col-sm-5 ">
                            <div class="cols-sm-10">
                                    <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-birthday-cake fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="birth" id="birth" ng-model='ex.item.birth'/>
                                    </div>
                            </div>
                    </div>
                </div>
                
                <div class='row container-fluid'>
                    <!-- Height current -->
                    <div class="form-group col-md-4 col-sm-4 ">
                        <p><b>Height:</b></p>
                    </div>
                    <div class="form-group col-md-3 col-sm-3 ">
                        <p>{{ex.info2.height_feet}}'{{ex.info2.height_inches}}"</p>
                    </div>
                    <!-- Height feet input -->
                    <div class="form-group col-md-2 col-sm-2 ">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="feet" id="feet" ng-model='ex.item.feet'/>
                            </div>
                    </div>
                    <!-- Height inches input -->
                    <div class="form-group col-md-2 col-sm-2 ">
                        <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="inches" id="inches" ng-model='ex.item.inches'/>
                        </div>
                    </div>      
                </div>
                
                <div class='row container-fluid'>
                    <!-- Weight current -->
                    <div class="form-group col-md-4 col-sm-4 ">
                        <p><b>Weight:</b></p>
                    </div>
                    <div class="form-group col-md-3 col-sm-3 ">
                        <p>{{ex.info2.weight}}</p>
                    </div>
                    <!-- Weight input -->
                    <div class="form-group col-md-5 col-sm-5 ">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="weight" id="weight" ng-model='ex.item.weight'/>
                            </div>
                    </div>
                </div>
                
                <hr>
                
                <div class='row container-fluid'>
                    <!-- Bench Press current -->
                    <div class="form-group col-md-4 col-sm-4 ">
                        <p><b>Bench Press (lbs):</b></p>
                    </div>
                    <div class="form-group col-md-3 col-sm-3 ">
                        <p>{{ex.info2.bench}}</p>
                    </div>
                    <!-- Bench Press input -->
                    <div class="form-group col-md-5 col-sm-5 ">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="bench" id="bench" ng-model='ex.item.bench' />
                        </div>
                    </div>
                </div>
             
                <div class='row container-fluid'>
                    <!-- Squat current -->
                    <div class="form-group col-md-4 col-sm-4 ">
                        <p><b>Squat (lbs):</b></p>
                    </div>
                    <div class="form-group col-md-3 col-sm-3 ">
                        <p>{{ex.info2.squat}}</p>
                    </div>
                    <!-- Squat input -->
                    <div class="form-group col-md-5 col-sm-5 ">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="squat" id="squat" ng-model='ex.item.squat' />
                        </div>
                    </div>
                </div>
                
                <div class='row container-fluid'>
                    <!-- Mile current -->
                    <div class="form-group col-md-4 col-sm-4 ">
                        <p><b>Mile Time(Ex: 06:20:00):</b></p>
                    </div>
                    <div class="form-group col-md-3 col-sm-3 ">
                        <p>{{ex.info2.mile_time}}</p>
                    </div>
                    <!-- mile input -->
                    <div class="form-group col-md-5 col-sm-5 ">
                        <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-clock-o fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="mile" id="mile" ng-model='ex.item.mile'/>
                        </div>
                    </div>
                </div>
				
                <div class='row container-fluid'>
                    <!-- Bench Press current -->
                    <div class="form-group col-md-4 col-sm-4 ">
                        <p><b>40 Yard Dash Time(Ex: 00:04:58):</b></p>
                    </div>
                    <div class="form-group col-md-3 col-sm-3 ">
                        <p>{{ex.info2.dash_time}}</p>
                    </div>
                    <!-- 40 input -->
                    <div class="form-group col-md-5 col-sm-5 ">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-clock-o fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="yard" id="yard" ng-model='ex.item.yard'/>
                        </div>
                    </div>
                </div>
                
		<hr>
                
                <!--Profile Picture input-->
                
                <div class='row container-fluid'>
                    <!-- Profile Picture current -->
                    <div class="form-group col-md-4 col-sm-4 ">
                        <p><b>Profile Picture:</b></p>
                    </div>
                    <div class="form-group col-md-3 col-sm-3 ">
                        <p>{{ex.info2.Image}}</p>
                    </div>   
                    <!-- Profile Picture input -->
                    <div class="form-group col-md-5 col-sm-5 ">
                            <div class="cols-sm-10">
                                    <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-institution fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="school" id="school" ng-model='ex.item.image'/>
                                    </div>
                            </div>
                    </div>
                </div>
                
                <div class='row container-fluid'>
                    <!-- Video URL current -->
                    <div class="form-group col-md-4 col-sm-4 ">
                        <p><b>Video (URL):</b></p>
                    </div>
                    <div class="form-group col-md-3 col-sm-3 ">
                        <p>{{ex.info2.youtube_urls}}</p>
                    </div>
                    <!-- Video input -->
                    <div class="form-group col-md-5 col-sm-5 ">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-film fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="video" id="video" ng-model='ex.item.video' />
                            </div>
                    </div>
                </div>
                
                <div class='row container-fluid'>
                    <!-- Bio current -->
                    <div class="form-group col-md-2 col-sm-2 ">
                        <p><b>Biography:</b></p>
                    </div>
                    <div class="form-group col-md-10 col-sm-10 ">
                        <p>{{ex.info2.bio}}</p>
                    </div>
                </div>
                <div class='row container-fluid'>
                    <!-- Bio input -->
                    <div class="form-group col-md-12">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                                    <textarea  class="form-control" name="bio" id="bio" ng-model='ex.item.bio'></textarea>
                            </div>
                    </div>
                </div>
                
		<hr>
                	

                <!-- Next Button -->
                <div class="form-group">
                    <p><button type='button' class='btn btn-primary btn-lg btn-block' ng-click='ex.addPlayerInfo(ex.item)'>Submit</button></p>
                    <!--<input type="submit" name="Submit" value="Submit" class="btn btn-primary btn-lg btn-block login-button">-->
                </div>		
            </form>
        </div>
              
        <!--
        COACH HOME VIEW
        -->
        <div class="col-lg-6 col-sm-6 col-sm-offset-1 home-container" ng-show='ex.coachhome'>
            <div  id='update-coach-profile-header' data-toggle="collapse" data-target="#updateCoachForm">
                <h4 class="col-sm-11">
                    <span class=""><i class="fa fa-edit fa" aria-hidden="true"></i></span>
                    Update your profile COACH
                </h4>
                <h4 class="col-sm-1"><i class="fa fa-caret-square-o-down fa" aria-hidden="true"></i></h4>
            </div>
			<hr>
            <form id="updateCoachForm" class="collapse" method="" action="">
                
                <!--College input-->
                <div class='row container-fluid'>
                    <!-- College current -->
                    <div class="form-group col-md-4 col-sm-4 ">
                        <p><b>College:</b></p>
                    </div>
                    <div class="form-group col-md-3 col-sm-3 ">
                        <p>{{ex.info5.college}}</p>
                    </div>   
                    <!-- College input -->
                    <div class="form-group col-md-5 col-sm-5 ">
                            <div class="cols-sm-10">
                                    <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-institution fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="school" id="school" ng-model='ex.item.college'/>
                                    </div>
                            </div>
                    </div>
                </div>
                
                <!--Profile Picture input-->
                
                <div class='row container-fluid'>
                    <!-- Profile Picture current -->
                    <div class="form-group col-md-4 col-sm-4 ">
                        <p><b>Profile Picture:</b></p>
                    </div>
                    <div class="form-group col-md-3 col-sm-3 ">
                        <p>{{ex.info5.image}}</p>
                    </div>   
                    <!-- Profile Picture input -->
                    <div class="form-group col-md-5 col-sm-5 ">
                            <div class="cols-sm-10">
                                    <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-institution fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="school" id="school" ng-model='ex.item.image'/>
                                    </div>
                            </div>
                    </div>
                </div>
                
                <div class='row container-fluid'>
                    <!-- Video URL current -->
                    <div class="form-group col-md-4 col-sm-4 ">
                        <p><b>Video (URL):</b></p>
                    </div>
                    <div class="form-group col-md-3 col-sm-3 ">
                        <p>{{ex.info5.youtube_urls}}</p>
                    </div>
                    <!-- Video input -->
                    <div class="form-group col-md-5 col-sm-5 ">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-film fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="video" id="video" ng-model='ex.item.youtube_urls' />
                            </div>
                    </div>
                </div>
                
                <div class='row container-fluid'>
                    <!-- Bio current -->
                    <div class="form-group col-md-2 col-sm-2 ">
                        <p><b>Biography:</b></p>
                    </div>
                    <div class="form-group col-md-10 col-sm-10 ">
                        <p>{{ex.info5.bio}}</p>
                    </div>
                </div>
                <div class='row container-fluid'>
                    <!-- Bio input -->
                    <div class="form-group col-md-12">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                                    <textarea  class="form-control" name="bio" id="bio" ng-model='ex.item.bio'></textarea>
                            </div>
                    </div>
                </div>
                
		<hr>
                		

                <!-- Next Button -->
                <div class="form-group">
                    <p><button type='button' class='btn btn-primary btn-lg btn-block' ng-click='ex.addCoachInfo(ex.item)'>Submit</button></p>
                    <!--<input type="submit" name="Submit" value="Submit" class="btn btn-primary btn-lg btn-block login-button">-->
                </div>		
            </form>
        </div>  
        <div class="col-sm-4 ">
            <div class="home-container search">
                <h4>
                    <span class=""><i class="fa fa-search fa" aria-hidden="true"></i></span>
                    Search
                </h4>	
                <!-- Search input -->
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
                <div class="form-group">
                        <p><button type='button' class='btn btn-primary btn-lg btn-block login-button' ng-click='ex.searchForPlayer(ex.item)'>Search</button></p>
                </div>
                <p><a href="#/search">Advanced Search</a></p>
                <h3 class='col-xs-12' ng-show="ex.noResults">
                    No players found!
                </h3>
                <div ng-show='ex.displaySearchResults' id='searchResults'>
                    <h4>Search Results: </h4>
                    <table class='table'>
                        <tr ng-repeat='item in ex.players track by $index'
                                            ng-show="item.subject==ex.subject.name">
                            <td class='col-xs-2'>
                                <a ng-click='ex.viewProfile(item.user_id)'>
                                    <img class='searchImage'src='{{item.Image | trustAsResourceUrl}}' />
                                </a>
                            </td>
                           <td class='col-xs-10'>
                                    <a ng-click='ex.viewProfile(item.user_id)'>
                                        <strong>{{item.first_name}} {{item.last_name}}</strong>
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

</div>
