<?php
include('appHeader2.php');
?>
<div id="homeContainer" class="xtra-top-pad " ng-controller='networkController as ex'>  
    <div id='favResults' class='row container-fluid'>
        <div  id='fav-results' class ='col-sm-10 col-sm-offset-1 home-container'>
            <h3 class='col-xs-12 center-text' ng-show="ex.nofavs">
                No Favorites found!
            </h3>
            <div ng-show="ex.favResults">
                <h4>My Favorites: </h4>
                <table id='fav-results-table' class='table'>
                    <div>
                        <tr class='col-sm-6' ng-repeat='item in ex.favinfo track by $index'
                                            ng-show="item.subject==ex.subject.name">
                            <td class='col-sm-3 col-sm-offset-1'>
                                <a ng-click='ex.viewProfile(item.user_id)'>
                                 <i class="fa fa-id-card fa-5x" aria-hidden="true"></i>
                                </a>
                            </td>
                           <td class='col-xs-7'>
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
    </div>
</div>
</div>

</div>

</div>