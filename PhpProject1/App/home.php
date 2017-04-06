<?php
include('appHeader2.php');
?>
<div class="top-marg" ng-controller='homeController as ex'>
    <div class='row container-fluid'>
        <div class='col-lg-12 center-text'>
                <h2>Recruit Chute Application Home</h2>
        </div>
        <div class="col-lg-2">
            <div class=" no-show">
                
            </div>
        </div>
        <div class="col-lg-8">
            <div class="home-container">
                <h3>Search
                    <span id="search" data-toggle="collapse" data-target="#hsearch" class="glyphicon glyphicon-plus"></span>
                </h3>
            </div>
        </div>
        <div class="col-lg-2">
            <div class=" no-show">
                
            </div>
        </div>
    </div>
    <div id="hsearch" class="collapse" class='row container-fluid'>
        <div class="col-lg-2">
            <div class=" no-show">
               
                
            </div>
        </div>
        <div class="col-lg-8">
            <div class="data-container">
                <form class="" method="post" action="<?php echo HOME;?>signup/playerSignupFinal">		
                    <!-- Search input -->
                    <div class="form-group ">
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="search" id="search"  placeholder="Type a players first and last name to search"/>
                            </div>
                    </div>
                    <div class="form-group">
                            <input type="submit" name="Submit" value="Search" class="btn btn-primary btn-lg btn-block login-button">
                    </div>
                </form>   
            </div>
        </div>
        <div class="col-lg-2">
            <div class=" no-show">
               
            </div>
        </div>
    </div>
    <div class='row container-fluid'>
        <div class="col-lg-2">
            <div class=" no-show">
               
                
            </div>
        </div>
        <div class="col-lg-8">
            <div class="home-container">
                <h3>Complete your profile
                     <span id="complete-profile" data-toggle="collapse" data-target="#hprofile" class="glyphicon glyphicon-plus"></span>
                </h3>
            </div>
        </div>
        <div class="col-lg-2">
            <div class=" no-show">
               
            </div>
        </div>
    </div>
    <div id="hprofile" class="collapse" class='row container-fluid'>
        <div class="col-lg-2">
            <div class=" no-show">
               
                
            </div>
        </div>
        <div class="col-lg-8">
            <div class="data-container">
                <form class="" method="post" action="<?php echo HOME;?>signup/playerSignupFinal">
                    <!-- Position select -->
                    <div class="form-group ">
                        <label class="cols-sm-2 control-label" for="position">Primary Position (You can add more later!)</label>
                        <div class="cols-sm-10">
                            <div class="input-group">	
                            <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                                <select id="position" name="position" ng-model='ex.item.position' class="form-control">
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
                    <!-- Bio input -->
                    <div class="form-group ">
                            <label for="Bio" class="control-label">Bio</label>
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                                    <textarea  class="form-control" name="bio" id="bio" ng-model='ex.item.bio' placeholder="Tell us more about yourself!"></textarea>
                            </div>
                    </div>        
                    <!-- Height input -->
                    <div class="form-group ">
                            <label for="height" class="control-label">Height</label>
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="height" id="height" ng-model='ex.item.height' placeholder="Enter your height"/>
                            </div>
                    </div>
                    <!-- Weight input -->
                    <div class="form-group ">
                            <label for="weight" class="control-label">Weight</label>
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-list fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="weight" id="weight" ng-model='ex.item.weight' placeholder="Enter your weight"/>
                            </div>
                    </div>
                    <hr>
                    <!-- High School input -->
                    <div class="form-group ">
                            <label for="school" class="cols-sm-2 control-label">High School</label>
                            <div class="cols-sm-10">
                                    <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-institution fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="school" id="school" ng-model='ex.item.school' placeholder="Enter school"/>
                                    </div>
                            </div>
                    </div>
                    <!-- GPA input -->
                    <div class="form-group ">
                            <label for="gpa" class="control-label">GPA</label>
                            <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-graduation-cap fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="gpa" id="gpa" ng-model='ex.item.gpa' placeholder="Enter your current GPA"/>
                            </div>
                    </div>
                    <!-- Graduation Date input (mm/yyyy-->
                    <div class="form-group ">
                            <label for="grad" class="cols-sm-2 control-label">Expected Graduation Date</label>
                            <div class="cols-sm-10">
                                    <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-graduation-cap fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="grad" id="grad" ng-model='ex.item.grad' placeholder="Ex: 12/9999"/>
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
        </div>
        <div class="col-lg-2">
            <div class=" no-show">
               
            </div>
        </div>
        <!--update profile success message -->
        <div class='row container-fluid success-message' ng-show='ex.displaySuccessMessage'>
            <div class='col-xs-11' >
                    {{ex.success_message}}
            </div>
            <div class='col-xs-1'>
                    <span class="glyphicon glyphicon-remove-circle" ng-click="ex.displaySuccessMessage=false"></span>
            </div>
        </div>
    </div>
    <div class='row container-fluid'>
        <div class="col-lg-2">
            <div class=" no-show">
               
                
            </div>
        </div>
        <div class="col-lg-8">
            <div class="home-container">
                <h3>Recruit Chute News
                    <span id="news" data-toggle="collapse" data-target="#hnews" class="glyphicon glyphicon-plus"></span>
                </h3>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="no-show">
                
            </div>
        </div>
    </div>
    <div id="hnews" class="collapse" class='row container-fluid'>
        <div class="col-lg-2">
            <div class=" no-show">
               
                
            </div>
        </div>
        <div class="col-lg-8">
            <div class="data-container">
                <h3>There is no news! 
                    
                </h3>
            </div>
        </div>
        <div class="col-lg-2">
            <div class=" no-show">
               
            </div>
        </div>
    </div>
</div>

</div>

</div>
