<?php
include('appHeader2.php');
?>
<div id="homeContainer" class="xtra-top-pad " ng-controller='networkController as ex'>  
    <div id='favResults' class='row container-fluid'>
        <div  id='fav-results' class ='col-md-5 col-md-offset-1 home-container'>
            <h3 class='col-xs-12 center-text' ng-show="ex.nofavs">
                No Favorite Players Found!
            </h3>
            <div ng-show="ex.favResults">
                <h4>My Favorite Players: </h4>
                <table id='fav-results-table' class='table'>
                    <div>
                        <tr class='col-sm-12' ng-repeat='item in ex.favinfo track by $index'
                                            ng-show="item.subject==ex.subject.name">
                            <td class='col-sm-4'>
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
                        </tr>
                    </div>
                </table>
            </div>  
        </div>
        <div  id='fav-school-results' class ='col-md-5 home-container'>
            <h3 class='col-xs-12 center-text' ng-show="ex.noschoolfavs">
                No Favorite Schools Found!
            </h3>
            <div ng-show="ex.favSchoolResults">
                <h4>My Favorite Schools: </h4>
                <table id='fav-school-results-table' class='table'>
                    <div>
                        <tr class='col-sm-12' ng-repeat='item in ex.favschoolinfo track by $index'
                                            ng-show="item.subject==ex.subject.name">
                            <td class='col-sm-4 '>
                                <a ng-click='ex.viewProfile(item.user_id)'>
                                    <img class='searchImageLarge'src='{{item.image | trustAsResourceUrl}}' />
                                </a>
                            </td>
                           <td class='col-xs-8'>
                                <a ng-click='ex.viewProfile(item.user_id)'>
                                    <h4>{{item.college}}</h4>
                                </a>
                                <p>{{item.city}}, {{item.state_name}}</p>
                                <p>Head Coach: {{item.head_coach}}</p>
                                <p>{{item.division}}</p>
                            </td>
                        </tr>
                    </div>
                </table>
            </div>  
        </div>
    </div>
</div>
</div>
</div>
</div>