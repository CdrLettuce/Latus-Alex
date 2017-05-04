<?php
include('appHeader2.php');
?>
<div id="messages-container" class="xtra-top-pad" ng-controller='messagesController as ex'>  
    <div id='messagesResults' class='row container-fluid'>
        <!-- SIDEBAR for inbox and outbox -->
        <div  id='messages-sidebar' class='col-sm-4'>
            <div id='inbox-container' >
                <div>
                    <h3  id='inbox' class='col-xs-12 center-text'>
                        Inbox
                    </h3>
                </div>
                <!--HERE is where you ng-repeat through the inbox messages-->
                <div id='inbox-messages'>
                    <div>
                        
                    </div>
                </div>
            </div>
            
            <div id='outbox-container' >
                <div id='outbox'>
                    <h3 class='col-xs-12 center-text'>
                        Outbox
                    </h3>
                </div>
                <!--HERE is where you ng-repeat through the inbox messages-->
                <div id='inbox-messages'>
                    <div>
                        
                    </div>
                </div>
            </div>
        </div> <!--End Sidebar-->
               
        <!-- Main for displaying separate messages and  -->
        <div  id='messages-main' class ='col-sm-8'>
            <div>
                <h4>My Favorites: </h4>
            </div>  
        </div>
    </div>
</div>

</div>

</div>