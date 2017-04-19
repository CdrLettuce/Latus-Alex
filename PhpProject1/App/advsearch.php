<?php
include('appHeader2.php');
?>
<div id="search-container" class="xtra-top-pad" ng-controller='advsearchController as ex'>
    <div id='search-controls' class='row container-fluid'>
        <div class ='col-xs-12 col-sm-10 col-sm-offset-1'>
            <h4>
                <span class=""><i class="fa fa-search fa" aria-hidden="true"></i></span>
                Advanced Search
            </h4>	
            <!-- Advanced Search input -->
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
            <div class="form-group col-sm-4 col-sm-offset-4">
                <p><button type='button' class='btn btn-primary btn-lg btn-block login-button' ng-click='ex.advsearchForPlayer(ex.item)'>Search</button></p>
            </div>
        </div>
    </div>
    <div id='search-results' class='row container-fluid'>
        <div class ='col-xs-12 col-sm-10 col-sm-offset-1'>
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
                             <i class="fa fa-id-card fa-5x" aria-hidden="true"></i>
                            </a>
                        </td>
                       <td class='col-xs-8'>
                            <a ng-click='ex.viewProfile(item.user_id)'>
                                <h4>{{item.first_name}} {{item.last_name}}</h4>
                            </a>
                            <p>{{item.city}}, {{item.state_name}}</p>
                            <p>{{item.position}}, Class of {{item.graduation_date}}</p>
                        </td>
                        <td class='col-xs-2'>
                            <button class="btn btn-primary">Favorite</button>
                        </td>
                    </tr>
                </table>
            </div>  
        </div>
    </div>
</div>

</div>

</div>