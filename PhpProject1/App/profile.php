<?php
include('appHeader2.php');
?>
<div id="profile-container" class="top-pad" ng-controller='profileController as ex'>
    <div id='profile-background' class='row container-fluid'>
        <div class='col-xs-12'>
            
        </div>
    </div>
    <div ng-show='ex.showPlayerProfile'>
        <div class='row container-fluid'>
            <div class="col-sm-3 col-sm-offset-1">
                <div class="sample-container">
                    <img class='profileImage'src='{{ex.info2.Image | trustAsResourceUrl}}' />
                    <h3> {{ex.currentUser.first_name}} {{ex.currentUser.last_name}} </h3>
                    <h4> {{ex.info2.position}}</h4>
                    <h4> {{ex.info.city}}, {{ex.info.state_name}} </h4>
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
                                <p><b>Secondary Position: </b>{{ex.info3.position}}</p>
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
    <div ng-show='ex.showCoachProfile'>
        <div class='row container-fluid'>
            <div class="col-sm-3 col-sm-offset-1">
                <div class="sample-container">
                    <img class='profileImage'src='{{ex.info5.image | trustAsResourceUrl}}' />
                    <h3> {{ex.info5.college}} </h3>
                    <h4> {{ex.info5.city}}, {{ex.info5.state_name}} </h4>
                </div>     
            </div>
            <div class="col-sm-7">
                <div class="sample-container">
                    <h4 class='title'>Videos</h4>
                    <div class="video-container">
                        <iframe src="{{ex.info5.youtube_urls | trustAsResourceUrl}}" frameborder="0" allowfullscreen>                        
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class='row container-fluid'>
            <div class="col-sm-5 col-sm-offset-1">
                <div class="sample-container left-text">
                    <h4 class='title'>About</h4>
                    <div class='row container-fluid'>
                            <div class='col-xs-6'>
                                <p><b>City: </b>{{ex.info5.city}}</p>
                            </div>
                           <div class='col-xs-6'>
                                 <p><b>State: </b>{{ex.info5.state_name}}</p>   
                            </div>
                    </div>
                    <div class='row container-fluid'>
                            <div class='col-xs-6'>
                                <p><b>Head Coach: </b>{{ex.info5.head_coach}}</p>
                            </div>
                           <div class='col-xs-6'>
                                 <p><b>Assistant Coach: </b>{{ex.info5.assistant_coach}}</p>   
                            </div>
                    </div>
                    <div class='row container-fluid'>
                            <div class='col-xs-6'>
                                <p><b>Division: </b>{{ex.info5.division}}</p>
                            </div>
                           <div class='col-xs-6'>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-5 ">
                <div class="sample-container left-text">
                    <h4 class='title' >Bio</h4>
                    <p>"{{ex.info5.bio}}"</p>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

</div>
