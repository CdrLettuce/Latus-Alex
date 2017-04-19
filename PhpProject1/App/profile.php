<?php
include('appHeader2.php');
?>
<div id="profile-container" class="top-pad" ng-controller='profileController as ex'>
    <div id='profile-background' class='row container-fluid'>
        <div class='col-xs-12'>
            
        </div>
    </div>
    <div class='row container-fluid'>
        <div class="col-sm-3 col-sm-offset-1">
            <div class="sample-container">
                <span class="glyphicon glyphicon-user logomedium"></span>
                <h3> {{ex.currentUser.first_name}} {{ex.currentUser.last_name}} </h3>
                <h4> {{ex.info2.position}}</h4>
                <h4> {{ex.info.city}}, {{ex.info.state_name}} </h4>
            </div>
        </div>
        <div class="col-sm-7">
            <div class="sample-container">
                <h4 class='title'>Videos</h4>
                <div class="video-container"><iframe width="350" height="220"
                    src='{{ex.info2.youtube_urls}}' frameborder="0" allowfullscreen>
                    </iframe></div>   
            </div>
        </div>
    </div>
    <div class='row container-fluid'>
        <div class="col-sm-3 col-sm-offset-1">
            <div class="sample-container">
                <h4 class='title'>Stats</h4>
                <p><b>City:</b> {{ex.info.city}}</p>
                <p><b>State:</b> {{ex.info.state_name}}</p>
                
            </div>
        </div>
        <div class="col-sm-7">
            <div class="sample-container">
                <h4 class='title'>About</h4>
                <p>{{ex.info2.bio}}</p>
            </div>
        </div>
    </div>
</div>

</div>

</div>