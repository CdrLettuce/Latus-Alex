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
                <img class='profileImage'src='../Assets/images/soccer_player_icon.jpg' />
                <h3> {{ex.currentUser.first_name}} {{ex.currentUser.last_name}} </h3>
                <h4> {{ex.info2.position}}</h4>
                <h4> {{ex.info.city}}, {{ex.info.state_name}} </h4>
            </div>
        </div>
        <div class="col-sm-7">
            <div class="sample-container">
                <h4 class='title'>Videos</h4>  
                <div class="video-container"><iframe width="560" height="300"
                     src="https://www.youtube.com/embed/lJTsfcmesR4" frameborder="0" allowfullscreen>
                     </iframe>
                </div>
            </div>
        </div>
    </div>
    <div class='row container-fluid'>
        <div class="col-sm-3 col-sm-offset-1">
            <div class="sample-container">
                <h4 class='title'>Stats</h4>
                <table class='table'>
                    <tr>
                        <td class='col-xs-6'>
                            <p><b>Height: </b>{{ex.info2.height_feet}}'{{ex.info2.height_inches}}"</p>
                        </td>
                       <td class='col-xs-6'>
                            <p><b>Mile Time: </b>{{ex.info2.mile_time}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td class='col-xs-6'>
                            <p><b>Weight: </b>{{ex.info2.weight}}</p>
                        </td>
                       <td class='col-xs-6'>
                            <p><b>40-Yard Dash Time: </b>{{ex.info2.dash_time}}</p>    
                        </td>
                    </tr>
                    <tr>
                        <td class='col-xs-6'>
                            <p><b>Primary Position:</b> {{ex.info2.position}}</p>
                        </td>
                       <td class='col-xs-6'>
                             <p><b>Max Bench: </b>{{ex.info2.bench}}</p>   
                        </td>
                    </tr>
                    <tr>
                        <td class='col-xs-6'>
                            <p><b>Secondary Position: </b>{{ex.info2.position_2}}</p>
                        </td>
                       <td class='col-xs-6'>
                             <p><b>Max Squat: </b>{{ex.info2.squat}}</p>   
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-sm-7">
            <div class="sample-container">
                <h4 class='title'>About</h4>
                <p>{{ex.info2.bio}}</p>
                <p><b>City:</b> {{ex.info.city}}</p>
                <p><b>State:</b> {{ex.info.state_name}}</p>
            </div>
        </div>
    </div>
</div>

</div>

</div>