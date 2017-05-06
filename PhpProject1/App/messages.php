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
                        <i class="fa fa-envelope fa" aria-hidden="true"></i>
                    </h3>
                </div>
                <!--HERE is where you ng-repeat through the inbox messages-->
                <div id='inbox-messages'>
                    <div>
                        <table class='table-striped'>
                            <tr ng-repeat='item in ex.inboxMessages track by $index'>
                                <td class='col-xs-12'>
                                    <a ng-click='ex.displayBigMessage(item.user_id)'>
                                        <p>From: {{item.first_name}}</p>
                                        <p>Subject: {{item.subject}}</p>
                                        <p>Time: {{item.time_sent}}</p>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            
            <div id='outbox-container' >
                <div>
                    <h3 id='outbox' class='col-xs-12 center-text'>
                        Outbox
                        <i class="fa fa-share fa" aria-hidden="true"></i>
                    </h3>
                </div>
                <!--HERE is where you ng-repeat through the inbox messages-->
                <div id='outbox-messages'>
                    <div>
                        <table class='table-striped'>
                            <tr ng-repeat='item in ex.outboxMessages track by $index'>
                                <td class='col-xs-12'>
                                    <a ng-click='ex.displayBigMessage(item.user_id)'>
                                        <p>To: {{item.first_name}}</p>
                                        <p>Subject: {{item.subject}}</p>
                                        <p>Time: {{item.time_sent}}</p>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!--End Sidebar-->
               
        <!-- Main for displaying separate messages and  -->
        <div  id='messages-main' class ='col-sm-8'>
            <div id ="current-message" class="row-container-fluid">
                <h4 id="LSM">Last Sent Message: </h4>
                <div id="from-time" class="col-sm-4">
                    <h4>from and time</h4>
                </div>
                <div id="message-subject"class="col-sm-4">
                    <h4> message subject</h4>
                </div>
                <div id="the-message" class="col-sm-8">
                    <h4>the message</h4>
                </div>
            </div> 
            <div id="message-reply" class="row-container-fluid">
                <div id="reply-subject" class="col-sm-8">
                    <input type="text" id="your-subject" placeholder="Subject">
                </div>
                <div id="your-message" class="col-sm-8">
                    <input type="text" id="reply"placeholder="Enter your reply here">
                </div>
                <div class="col-sm-4">
                    <button ng-click="" id="reply-button" class="col-sm-4">Reply</button>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

</div>
