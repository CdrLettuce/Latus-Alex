<?php
include('appHeader2.php');
?>
<div id="profile-container" class="top-pad" ng-controller='profileController as ex'>
    <div id='profile-background' class='row container-fluid'>
        <div class='col-xs-12'>
            
        </div>
    </div>
    <div class='row container-fluid'>
        <div class="col-lg-3 col-sm-offset-1">
            <div class="sample-container">
                <span class="glyphicon glyphicon-user logomedium"></span>
                <h4> {{ex.currentUser.first_name}} {{ex.currentUser.last_name}} </h4>
                <h4> {{ex.info2.position_1}}</h4>
                <h4> {{ex.info.city}}, {{ex.info.state_name}} </h4>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="sample-container">
                <h4 class='title'>Videos</h4>
                <div class="video-container"><iframe width="320" height="212"
                    src="https://www.youtube.com/embed/kp1kuo6xkbE" frameborder="0" allowfullscreen>
                    </iframe></div>   
            </div>
        </div>
    </div>
    <div class='row container-fluid'>
        <div class="col-lg-3 col-sm-offset-1">
            <div class="sample-container">
                <h4 class='title'>Stats</h4>
                <p><b>City:</b> {{ex.info.city}}</p>
                <p><b>State:</b> {{ex.info.state_name}}</p>
                
            </div>
        </div>
        <div class="col-lg-7">
            <div class="sample-container">
                <h4 class='title'>About</h4>
                <p>{{ex.info2.bio}}</p>
            </div>
        </div>
    </div>
</div>

</div>

</div>