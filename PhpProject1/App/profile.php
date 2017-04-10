<?php
include('appHeader2.php');
?>
<div id="profile-container" class="top-marg" ng-controller='profileController as ex'>
    <div class='row container-fluid'>
        <div class="col-lg-3">
            <div class="sample-container">
                <h3> {{ex.currentUser.first_name}} {{ex.currentUser.last_name}} </h3>
                <span class="glyphicon glyphicon-user logomedium"></span>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="sample-container">
                <h3>Videos</h3>
                <iframe width="300" height="200"
                    src="{{ex.info2.youtube_urls}}">
                </iframe>   
            </div>
        </div>
        <div class="col-lg-3">
            <div class="sample-container">
                <h3>Stats</h3>
                <p><b>Height:</b> {{ex.info2.height}}</p>
                <p><b>Weight:</b> {{ex.info2.weight}}</p>
                
            </div>
        </div>
    </div>
    <div class='row container-fluid'>
        <div class="col-lg-3">
            <div class="sample-container">
                <h3>Location</h3>
                <p><b>City:</b> {{ex.info.city}}</p>
                <p><b>State:</b> {{ex.info.state_name}}</p>
                
            </div>
        </div>
        <div class="col-lg-6">
            <div class="sample-container">
                <h3>About Me</h3>
                <p>{{ex.info2.bio}}</p>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="sample-container">
                <h3>High School Info</h3>
                <p><b>High School:</b> {{ex.info2.h_school}}</p>
                <p><b>GPA:</b> {{ex.info2.gpa}}</p>
                <p><b>Expected Grad Date:</b> {{ex.info2.graduation_date}}</p>
            </div>
        </div>
    </div>
</div>

</div>

</div>