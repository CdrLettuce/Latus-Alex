<?php
include('appHeader2.php');
?>
<div class="top-marg" ng-controller='profileController as ex'>
    <div class='row container-fluid'>
        <div class='col-lg-12'>
                <h2>Recruit Chute Application Profile</h2>
        </div>
        <div class="col-lg-3">
            <div class="sample-container">
                <h3> {{ex.currentUser.first_name}} {{ex.currentUser.last_name}} </h3>
                <span class="glyphicon glyphicon-user logomedium"></span>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="sample-container">
                <h3>Videos</h3>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="sample-container">
                <h3>Stats</h3>
            </div>
        </div>
    </div>
    <div class='row container-fluid'>
        <div class="col-lg-3">
            <div class="sample-container">
                <h3>Location</h3>
                <p>City: {{ex.info.city}}</p>
                <p>State: {{ex.info.state_name}}</p>
                
            </div>
        </div>
        <div class="col-lg-6">
            <div class="sample-container">
                <h3>Upcoming Dates</h3>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="sample-container">
                <h3>Awards</h3>
            </div>
        </div>
    </div>
</div>

</div>

</div>